<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurances extends Model
{
    use HasFactory;

    protected $table= 'insurances';

    protected $fillable = [
        'CIF',
        'name',
        'address',
        'price',
        'active',
    ];

    public function validationInsurances(){
        return [
            'CIF'               => 'required',
            'name'              => 'required',
            'address'           => 'required',
            'price'            => 'required',
        ];

    }
}
