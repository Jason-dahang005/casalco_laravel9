<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_application_id',
        'benName',
        'benRelation',
        'benAge',
        'benAddress',
        'benMothersLname',
        'benMothersFname',
        'benMothersMname',
    ];
}
