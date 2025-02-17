<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityGuard extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        
        
        
    ];
    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
