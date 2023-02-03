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
        'sponsoring_money',
        'course_duration',
    ];
}
