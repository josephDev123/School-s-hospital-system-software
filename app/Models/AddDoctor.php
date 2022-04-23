<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDoctor extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_name', 'Doctor_specialty', 'Doctor_email', 'Doctor_telephone'];
}
