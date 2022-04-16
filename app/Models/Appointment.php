<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'created_at', 'updated_at', 'student_name', 'student_email', 'medical_department', 'student_matric', 'student_department', 'student_phoneNumber', 'user_id', 'symptom'];
}
