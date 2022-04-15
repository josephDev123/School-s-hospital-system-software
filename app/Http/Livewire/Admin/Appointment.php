<?php

namespace App\Http\Livewire\Admin;

use App\Models\Appointment as ModelsAppointment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Builder\Function_;

class Appointment extends Component
{
   

    public $fullname='';
    public $email = '';
    public $medical_department = '';
    public $matric_no = '';
    public $student_department = '';
    public $phone_number = '';
    public $symptom = '';

    protected $rules = [
        'fullname' => 'required|string|',
        'email' => 'required|email:rfc,dns|',
        'medical_department' => 'required|string|',
        'matric_no' => 'required|string|',
        'student_department' => 'required|string|',
        'phone_number' => 'required|string|',
        'symptom' => 'required|min:20|max:500|'
    ];

    public Function appointSubmit(){
        //validation 
        $this->validate();
        //corrent logged-in user
         $user = Auth::user()?Auth::user()->email:'';

        // if not error below code is executed
        ModelsAppointment::create([
            "student_name" => $this->fullname,
            "student_email" => $this->email,
            "medical_department" => $this->medical_department,
            "student_matric" => $this->matric_no,
            "student_department" => $this->student_department,
            "student_phoneNumber" => $this->phone_number,
            'symptom'=>$this->symptom,
            "user_id" => $user,

        ]);

        $this->session()->flash('success', 'Appointment Created successfully');
        
      
    }
    
    public function render()
    {
        return view('livewire.admin.appointment');
    }
}
