<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use PhpParser\Builder\Function_;

class Appointment extends Component
{

    public Function appointSubmit(){
        dd('hello world');
    }
    
    public function render()
    {
        return view('livewire.admin.appointment');
    }
}
