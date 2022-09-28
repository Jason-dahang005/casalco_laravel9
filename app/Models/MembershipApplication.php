<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beneficiary;
use App\Models\Spouse;

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
        'is_approved',
        'acc_id',
        'or_no'
        // 'selfiepic',
        // 'empIDpic'
    ];

    public function Beneficiary(){
        return $this->hasMany(Beneficiary::class);
    }

    public function spouse(){
        return $this->hasOne(Spouse::class);
    }
}
