<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Appointment extends Component
{

    function submit(){
        dd('hello');
    }
    public function render()
    {
        return view('livewire.appointment');
    }
}
