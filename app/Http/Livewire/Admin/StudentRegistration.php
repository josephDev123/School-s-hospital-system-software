<?php

namespace App\Http\Livewire\Admin;

use App\Models\studentRecord;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentRegistration extends Component
{

    use WithFileUploads;
    //input record from users;
    public $firstname = '';
    public $lastname= '';
    public $email= '';
    public $department= '';
    public $college= '';
    public $student_image;
    public $student_level= '';
    public $matric_no= '';

    
    protected $rules =[
        'email'=>'unique:student_records',
        'student_image'=> 'image|max:1024', // 1MB Max
    ];

    public function hydratedStudent_image(){
        dump($this->student_image);
    }


    public function submitStudentRecord(){
        // validate the input field data
        $this->validate();

        //deploy the file to a local folder
        // $path = Storage::putFileAs('admin/template/assets/images/student_image', $this->student_image, $this->student_image.rand());
        $path=$this->student_image->storeAs('student_image', 'avatar'.rand());

        studentRecord::create([
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'department'=>$this->department,
            'college'=>$this->college,
            'student_image'=> $path,
            'level'=>$this->student_level,
            'matric_no'=>$this->matric_no,

        ]);

        session()->flash('success', 'Record submitted successfully');
        $this->reset();

    }
    public function render()
    {
        return view('livewire.admin.student-registration');
    }
}
