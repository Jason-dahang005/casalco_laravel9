<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;


    public function express(){
        return $this->belongsTo(ExpressLadLoanDetails::class, 'id');
    }
    public function regularSpecial(){
        return $this->hasMany(RegularSpecialLoanDetails::class,'loan_applications_id');
    }
}

