<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use app\Models\studentRecord;
use Livewire\WithFileUploads;

class StudentRegistration extends Component
{

    use WithFileUploads;
    //input record from users;
    public $firstname;
    public $lastname;
    public $email;
    public $department;
    public $college;
    public $student_image;
    public $student_level;
    public $matric_no;

    protected $rules =[
        'email'=>'unique:student_records',
        'student_image'=> 'image|max:1024', // 1MB Max
    ];


    public function submitStudentRecord(){
        // validate the input field data
        $this->validate();

        studentRecord::create([
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'department'=>$this->department,
            'college'=>$this->college,
            'student_image'=>$this->student_image,
            'level'=>$this->student_level,
            'matric_no'=>$this->matric_no,

        ]);

        session()->flash('success', 'record submitted succefully');;

    }
    public function render()
    {
        return view('livewire.admin.student-registration');
    }
}
