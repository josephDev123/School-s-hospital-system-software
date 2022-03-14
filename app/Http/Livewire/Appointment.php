<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Appointment as appointmentModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Null_;

class Appointment extends Component
{
// properties
    public $student_name;
    public $student_email;
    public $student_matric;
    public $student_department;
    public $student_phoneNumber;
    public $student_symptom;

    // input validation
    protected $rules = [
        "student_name"=>'required|',
        'student_email'=>'required|email|',
        'student_matric'=>'required|',
        'student_department'=>'required|',
        'student_phoneNumber'=>'required|',
        'student_symptom'=>'required|max:500',
    ];

    public function submit(){

        $this->validate();
        appointmentModel::create([
             'student_name' =>$this->student_name, 
             'student_email'=>$this->student_email, 
            //  'medical_department'=>$this->student_department,
             'student_department'=>$this->student_department,
              'student_matric'=>$this->student_matric, 
              'student_phoneNumber'=>$this->student_phoneNumber,
               'user_id'=> Auth::id()? Auth::id():"",
        ]);

        session()->flash('success', 'Medical appointment sent');
        $this->resetValidation();
        $this->reset();

    }


    public function render()
    {
        return view('livewire.appointment');
    }
}
