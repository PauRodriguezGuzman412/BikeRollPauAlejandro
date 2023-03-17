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

    // public function validationRules(){
    //     return [
    //         'id_courses' => 'required',
    //         'id_runners' => 'required',
    //         'dorsal'     => 'required',
    //         'insurance'  => 'required',
    //         'QR'         => 'required',
    //         'points'     => 'nullable',
    //     ];
    // }
}
