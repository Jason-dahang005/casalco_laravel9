<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpressLoanApp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'acc_id',
        'name',
        'present_address',
        'permanent_address',
        'loan_type',
        'emp',
        'emp_address',
        'email',
        'amount',
        'mode_payment',
        'term_applied',
        'phone_no',
        'tin',
        'fb_acc',

    ];
}
