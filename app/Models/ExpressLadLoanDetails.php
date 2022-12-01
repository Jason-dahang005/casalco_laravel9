<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpressLadLoanDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_loan',
        'employer' ,
        'employer_address',
        'amount_applied',
        'term_applied',
        'mode_of_payment',
        'facebook_account',
        'scanned_signature',
        'loan_application_id'
    ];
}
