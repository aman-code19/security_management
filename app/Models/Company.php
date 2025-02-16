<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'website',
        'phone1',
        'phone2',
        'phone3',
        'image',
        'address',
        
    ];
}
