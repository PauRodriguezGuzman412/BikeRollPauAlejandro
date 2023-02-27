<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $table= 'pictures';

    private $id;

    protected $fillable = [
        'id',
        'course_id',
        'image_path',
    ];

    public function id(){
        return $this->id;
    }
}
