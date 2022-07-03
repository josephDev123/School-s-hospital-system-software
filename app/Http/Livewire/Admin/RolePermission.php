<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class RolePermission extends Component
{
    public function render()
    {
        return view('livewire.admin.role-permission', ['users'=>User::all()]);
    }
}
