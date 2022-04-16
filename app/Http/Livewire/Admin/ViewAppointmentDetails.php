<?php

namespace App\Http\Livewire\Admin;

// use App\Http\Livewire\Admin\Appointment as AdminAppointment;
use App\Models\Appointment;

use Livewire\Component;

class ViewAppointmentDetails extends Component
{
  


    public function render()
    {
        return view('livewire.admin.view-appointment-details', ['appointment_lists'=>  Appointment::all()]);
    }
}
