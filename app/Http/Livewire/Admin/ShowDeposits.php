<?php

namespace App\Http\Livewire\Admin;

use App\Models\Deposit;
use App\Models\Plan;
use App\Models\User;
use App\Mail\DepositApprovalMail;
use App\Mail\RewardDownlineMail;
use App\Mail\RewardUplineMail;
use App\Models\Referral;
use App\Notifications\ReferralIncomeNotification;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDeposits extends Component
{
    use WithPagination;    
    public $search ='';  

    protected $listeners = [
        'editedDeposit'=>'$refresh',
        'approvedDeposit'=>'$refresh',
        'deletedDeposit'=>'$refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();         
    }

    public function clear(){
        $this->search = '';
    }

    public function approve($id){
        $deposit=Deposit::find($id);
        if($deposit->isApproved = true){
            $deposit->update();
            $user = User::find($deposit->user_id);
            $user->acBal += $deposit->amount;           
            $user->acRoi += $deposit->amount;           
            $user->isEarning = true;
            $user->plan_id = Plan::where('name',$deposit->plan)->value('id');
            $user->update();
            Mail::to($user->email)->send(new DepositApprovalMail($deposit)); 
            if ($user->upline_id !== null && $user->hasDeposited !== true) {                
                $rewardUp = 10;
                $rewardDown = 10;                            
                $referrer = Referral::where('downline_id', $user->id)->first();
                if ($referrer !== null) {
                    $upline = $referrer->user;
                    if ($upline !== null) {                        
                        $upline->acRoi += $rewardUp;
                        $upline->refBonus += $rewardUp;
                        $upline->save();
                        $user->acRoi = $rewardDown;
                        $user->save();
                        Mail::to($upline->email)->send(new RewardUplineMail($rewardUp));
                        Mail::to($user->email)->send(new RewardDownlineMail($rewardDown));                        
                    }
                }
            }
                         
            $this->emit('approvedDeposit');
        }
    }

    public function delete($id){
       $deposit = Deposit::find($id);       
       $deposit->delete();
       $this->emit('deletedDeposit');
    }

    public function render()
    {
        return view('livewire.admin.show-deposits',[
            'deposits'=>Deposit::where('amount', 'like', '%'.$this->search.'%')            
            ->orWhere('plan','like', '%'.$this->search.'%')       
            ->orWhere('wallet','like', '%'.$this->search.'%')
            ->orWhereRelation('user', 'username', 'like', '%'.$this->search.'%') 
            ->orderByDesc('created_at')
            ->paginate(7),
        ]);
    }
}
