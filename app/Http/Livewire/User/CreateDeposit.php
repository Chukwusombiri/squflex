<?php

namespace App\Http\Livewire\User;

use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Wallet;
use Exception;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CreateDeposit extends Component
{
    public $amount = '';
    public $selectedWallet = '';
    public $selectedAddress = '';
    public \App\Models\Plan $plan;
    public $allWallets;   

    public function mount($sentPlan){
        $this->plan = $sentPlan;
        $this->allWallets = Wallet::all();
    }

    protected $rules = [
        'amount' => ['required','numeric','integer',],
        'selectedWallet' => ['required','string','exists:wallets,name'],
        'selectedAddress' => ['required','string','exists:wallets,address'],
    ];

    protected $validationAttributes = [
        'selectedWallet' => 'Funding source',
        'selectedAddress' => 'Funding source details',
    ];

    public function tryValue($value){
        try {            
            $wallet = Wallet::findOrFail($value);   
            if($this->selectedWallet!=='' && $this->selectedWallet===$wallet->name){
                $this->selectedWallet = '';  
                $this->selectedAddress = '';
                return;
            }
            $this->selectedWallet = $wallet->name;  
            $this->selectedAddress = $wallet->address;
        } catch (\Throwable $th) {
            throw $th;
        }        
    }

    public function deposit(){
        $this->validate(['amount' => ['required','numeric','integer','gte:' . $this->plan->min,]]);        
        try {            
            $deposit = new Deposit();
            $deposit->amount = $this->amount;
            $deposit->wallet = $this->selectedWallet;
            $deposit->address = $this->selectedAddress;
            $deposit->user_id = auth()->user()->id;
            $deposit->plan = Plan::where('id',$this->plan->id)->get() ? $this->plan->name : throw new Exception('unable to find selected investment plan');
            $deposit->save();
            \App\Events\UserDeposited::dispatch($deposit);
            session()->put('deposit',[
                'wallet'=>$deposit->wallet,
                'amount'=>$deposit->amount,
                'address'=>$deposit->address,
            ]);
            return redirect()->route('user.deposit.complete');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            session()->flash('error','something went wrong, try again later.');
        }
    }

    public function render()
    {
        return view('livewire.user.create-deposit');
    }
}
