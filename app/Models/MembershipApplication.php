<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fname',
        'Mname',
        'Lname',
         'suffix',
         'gender',
         'dob',
         'Bplace',
         'address',
        'unit',
        'occupation',
        'educ',
        'MI',
        'civilStatus',
        'religion',
        'contactNum',
        'TIN',
        'SSSnum',
        'email',
        'NumDependents',
        'spouseFname',
        'spouseAge',
        'spouseOcc',
        'spouseMI',
        'spouseEmplrName',
        'spouseConNum',
        'benName',
        'benRelation',
        'benAge',
        'benAddress',
        'benMothersLname',
        'benMothersFname',
        'benMothersMname',
        'status'
        // 'selfiepic',
        // 'empIDpic'
    ];
}
