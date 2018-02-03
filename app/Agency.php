<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'business_name',
        'applicant_name',
        'phone',
        'city',
        'description',
        'facilities'
    ];

    static function createNew($array){
        return static::Create($array);
    }
}
