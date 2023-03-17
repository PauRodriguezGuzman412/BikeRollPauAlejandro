<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorCourses extends Model
{
    use HasFactory;

    protected $table= 'sponsored_courses';

    public $timestamps = false;

    protected $fillable = [
        'course_id',
        'sponsor_id',
    ];
}
