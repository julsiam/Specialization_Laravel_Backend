<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{

    protected $fillable = [
        'sex',
        'fname',
        'mname',
        'lname',
        'birthdate',
        'birthplace',
        'idtype',
        'ffname',
        'fmname',
        'flname',
        'mfname',
        'mmname',
        'mlname',
        'latereg',
        'purpose',
        'phone',
        'status'
    ];

    use HasFactory;
}
