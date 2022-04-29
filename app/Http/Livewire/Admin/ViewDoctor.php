<?php

namespace App\Http\Livewire\Admin;

use App\Models\AddDoctor;
use Livewire\Component;

class ViewDoctor extends Component
{

    public function getAllModel(){
        return AddDoctor::all();
    }


    public function render()
    {
        return view('livewire.admin.view-doctor', ['all_doctors'=>$this->getAllModel()]);
    }
}
