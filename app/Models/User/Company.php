<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    
    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'address',
        'logo',
        'dark_logo',
        'light_logo',
        'user_id',
    ];
    use HasFactory;
}
