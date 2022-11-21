<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_of_member',
        'account_no',
        'present_address',
        'permanent_address',
        'loan_type',
        'employer',
        'employer_address',
        'date_of_birth',
        'age',
        'cellphone_no',
        'tin_no',
        'email_address',
        'facebook_account',
        'amount_applied',
        'term_applied',
        'mode_of_payment',
        'scanned_signature'
    ];

    public function express(){
        return $this->hasMany(ExpressLoanApp::class,'loan_application_id');
    }

    public function regularSpecial(){
        return $this->hasMany(RegularSpecialLoan::class,'loan_application_id');
    }
}

