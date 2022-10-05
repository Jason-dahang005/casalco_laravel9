<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MonthlyExpenses;
use App\Models\MonthlyIncome;
use App\Models\CoMaker;


class RegularSpecialLoan extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'acc_id',
        'age',
         'present_address',
         'permanent_address',
         'dob',
         'fb_acc',
         'emp',
        'phone_no',
        'occupation',
        'length_service',
        'emp_status',
        'civilStatus',
        'present_position',
        's_name',
        'tin',
        'sss',
        'email',
        'no_child',
        'loan_cat',
    ];

    public function MonthlyExpenses(){
        return $this->hasOne(MonthlyExpenses::class);

    }
    public function MonthlyIncome(){
        return $this->hasOne(MonthlyIncome::class);
    }
    public function CoMaker(){
        return $this->hasOne(CoMaker::class);
    }
}
