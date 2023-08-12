<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'R_description',
        'address',
        'phone',
        'email',
        'E_title',
        'year',
        'school_name',
        'E_description',
        'Pe_title',
        'Pe_year',
        'Pe_address',
        'points',
    ];
}
