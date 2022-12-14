<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularSpecialLoanDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_applications_id',
        'length_of_service',
        'employment_status',
        'present_position',
    ];

    public function income(){
        return $this->belongsTo(MonthlyIncome::class, 'id');
    }

    public function expenses(){
        return $this->belongsTo(MonthlyExpenses::class, 'id');
    }

}
