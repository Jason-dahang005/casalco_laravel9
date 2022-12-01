<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    public function exp_lad(){
        return $this->hasMany(ExpressLadLoanDetails::class);
    }

    public function reg_sp(){
        return $this->hasMany(RegularSpecialLoanDetails::class);
    }
}

