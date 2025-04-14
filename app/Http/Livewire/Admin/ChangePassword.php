<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ChangePassword extends Component
{
    public $currentPassword = '';
    public $password = '';
    public $password_confirmation = '';

    protected $rules = [
        'currentPassword' => ['required','current_password:admin'],
        'password' => ['required','confirmed'],
    ];

    public function submit(){
        $this->validate();

        $admin = Admin::findOrFail(auth('admin')->user()->id);
        $admin->password = Hash::make($this->password);
        $admin->save();
        try {
            Auth::logoutOtherDevices($this->currentPassword);
            $this->emit('passwordChanged');
            $this->reset();
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.change-password');
    }
}
