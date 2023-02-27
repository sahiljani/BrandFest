<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $table = 'poster';

    protected $fillable = [
    
    'name',
    'date',
    'image',    
    'description',  
    'logo_type',
    'logo_details',
    'phone_details',
    'email_details',
    'company_details',
    'address_details',
    'generated4all',    
    ];
    use HasFactory;
}
