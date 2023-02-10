<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{
    use HasFactory;

    protected $table= 'sponsors';

    private $id;

    protected $fillable = [
        'CIF',
        'logo',
        'address',
        'principal_page',
    ];

    public function validationSponsor(){
        return [
            'CIF'                => 'required',
            'logo'               => 'required',
            'address'            => 'required',
            'principal_page'     => 'required',
        ];
        
    }

    public function id(){
        return $this->id;
    }
}
