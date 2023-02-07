<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{

    protected $fillable=[
        'sex',
        'fname',
        'mname',
        'lname',
        'birthdate',
        'birthplace',
        'idtype',
        'sfirstname',
        'smiddlename',
        'slastname',
        'marriageDate',
        'marriageplace',
        'purpose',
        'legalProceedings',
        'phone',
        'status'
    ];

    use HasFactory;
}
