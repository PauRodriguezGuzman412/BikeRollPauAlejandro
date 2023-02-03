<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table= 'courses';

    protected $fillable = [
        'description',
        'slope',
        'map_image',
        'maxim_participants',
        'km',
        'start_date',
        'start_point',
        'promotion_banner',
        'active',
        'sponsoring_money',
        'course_duration',
    ];

    public function validationRules(){
        return [
            'description'        => 'required',
            'slope'              => 'required',
            'map_image'          => 'required',
            'maxim_participants' => 'required',
            'km'                 => 'required',
            'start_date'         => 'required',
            'start_point'        => 'required',
            'promotion_banner'   => 'required',
            'sponsoring_money'   => 'required',
            'course_duration'    => 'required',
        ];
        
    }
}
