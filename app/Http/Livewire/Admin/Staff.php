<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Staff extends Component
{   
    public $user_admin;

    public function mount(){
       $this->user_admin= User::all()->where('user_permission', '=', 'admin');
    }

    public function render()
    {
        return view('livewire.admin.staff', ['permitted_users'=>$this->user_admin]);
    }
}
