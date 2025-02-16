<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySite extends Model
{
    protected $fillable = [
        'name',
        'company',
        'phone1',
        'phone2',
        'phone3',
        'image',
        'address',
        
    ];
}
