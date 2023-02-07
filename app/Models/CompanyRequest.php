<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRequest extends Model
{

    protected $fillable = [
        'company',
        'requests',
        'place',
        'year',
        'purpose'
    ];
    use HasFactory;
}
