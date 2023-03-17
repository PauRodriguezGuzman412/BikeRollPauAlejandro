<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesRegister extends Model
{
    use HasFactory;

    protected $table= 'courses_register';

    protected $fillable = [
        'id_courses',
        'dni_runners',
        'dorsal',
        'insurance',
        'points',
        'data'
    ];
}
