<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runners extends Model
{
    use HasFactory;

    protected $table= 'runners';


    protected $fillable = [
        'name',
        'dni',
        'surname',
        'address',
        'date_of_birth',
        'federated',
        'federated_num',
    ];

    public function validationRules(){
        return [
            'name'                  => 'required',
            'dni'                   => 'required',
            'surname'               => 'required',
            'address'               => 'required',
            'date_of_birth'         => 'required',
            'federated'             => 'required',
            'federated_num'         => 'nullable',
        ];
    }
}
