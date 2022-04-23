<?php

namespace App\Http\Livewire\Admin;

use App\Models\AddDoctor as ModelsAddDoctor;
use Livewire\Component;

class AddDoctor extends Component
{
    public $doctor_name;
    public $Doctor_specialty;
    public $Doctor_email;
    public $Doctor_telephone;

    protected $rules = [
        "doctor_name" => 'required|string|max:30',
        "Doctor_specialty" => 'required|string|max:50',
        "Doctor_email" => 'required|unique:add_doctors',
        "Doctor_telephone" => 'required|integer'
    ];

    public function handleAddDoctor(){
        // if this validation fails, it won't execute the code after it
        $this->validate();
        //insert data into model 
        ModelsAddDoctor::create([
            "doctor_name"=>$this->doctor_name,
            "Doctor_specialty"=>$this->Doctor_specialty,
            "Doctor_email"=>$this->Doctor_email,
            "Doctor_telephone"=>$this->Doctor_telephone
        ]);
         session()->flash('success', 'Doctor added successfully');
         $this->reset();
       
    }

    public function render()
    {
        return view('livewire.admin.add-doctor');
    }
}
