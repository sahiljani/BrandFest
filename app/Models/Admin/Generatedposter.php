<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generatedposter extends Model
{
    protected $table = 'generated_poster';

    protected $fillable = [
        'poster_path',
        'company_id ',
        'poster_id '             
    ];
    use HasFactory;
}
