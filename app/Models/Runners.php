<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runners extends Model
{
    use HasFactory;

    protected $table= 'runners';

    private $id;

    protected $fillable = [
        'name',
        'surname',
        'address',
        'date_of_birth',
        'federated',
        'federated_num',
    ];

    public function validationRules(){
        return [
            'name'                  => 'required',
            'surname'               => 'required',
            'address'               => 'required',
            'date_of_birth'         => 'required',
            'federated'             => 'required',
            'federated_num'         => 'nullable',
        ];
    }

    public function id(){
        return $this->id;
    }
}
