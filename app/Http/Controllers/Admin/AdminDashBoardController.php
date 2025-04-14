<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Admin, Deposit, User, Withdrawal};
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminDashBoardController extends Controller
{   
   
    public function index(){  
        $lastSignOut = auth('admin')->user()->last_sign_out_at!==null ? auth('admin')->user()->last_sign_out_at : now();
        $newusers = User::where('created_at','>',$lastSignOut)
        ->orderBy('created_at','desc')
        ->get();
        $users = User::count();
        $deposits = Deposit::has('user')->where('isApproved',1)->get();                   
        $acBal = User::sum('acBal');       
        $acRoi  = User::sum('acRoi');
        $perMonRoi  = User::sum('perMonRoi');       
        $totDepositCount = Deposit::has('user')->count();        
        $totWitCount = Withdrawal::has('user')->count();                          
        $depositedCount = Deposit::has('user')->where('isApproved',1)->count();
        $depositedValue = Deposit::has('user')->where('isApproved',1)->sum('amount');
        $withdrawnCount  = Withdrawal::has('user')->where('isApproved',1)->count();
        $withdrawnValue = Withdrawal::has('user')->where('isApproved',1)->sum('amount');                
        $newDeposits = Deposit::has('user')->with('user')->where('created_at','>',$lastSignOut)->get();
        $newWithdrawals = Withdrawal::has('user')->with('user')->where('created_at','>',$lastSignOut)->get();            

        return view('admin.dashboard')->with([
            'users'=>$users,
            'acBal'=>$acBal,
            'acRoi'=>$acRoi,
            'perMonRoi'=>$perMonRoi,
            'totDepositCount'=>$totDepositCount,
            'totWitCount'=>$totWitCount,
            'deposits'=>$deposits,
            'depositedCount'=>$depositedCount,
            'depositedValue'=>$depositedValue,
            'newusers' => $newusers,
            'newDeposits'=>$newDeposits,
            'withdrawnCount'=>$withdrawnCount,
            'withdrawnValue'=>$withdrawnValue,
            'newWithdrawals'=>$newWithdrawals,
        ]);
    }

    public function resetpwd(){             
        return view('admin.resetpwd');
    }

    public function editUserDeposit($id){
        Deposit::findOrFail($id);
        return view('admin.editUserDeposit')->with('depositId',$id);
    }
    
    public function administrators(){
        if(auth('admin')->user()->admin_role!=='super_admin')
        {
            return redirect()->back();
        }
        return view('admin.administrators');
    }

    public function newAdministrator(){
        if(auth('admin')->user()->admin_role!=='super_admin')
        {
            return redirect()->back();
        }
        return view('admin.new_administrator');
    }

    public function editAdministrator($id){
        if(auth('admin')->user()->admin_role!=='super_admin')
        {
            return redirect()->back();
        }
        $admin = Admin::findOrFail($id);
        return view('admin.edit_administrator')->with('admin',$admin);
    }

    public function referralSystem(){
        return view('admin.referrals');
    }
}
