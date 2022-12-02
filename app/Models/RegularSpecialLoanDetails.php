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

    /**
     * Get the income associated with the RegularSpecialLoanDetails
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function income(): HasOne
    {
        return $this->hasOne(MonthlyIncome::class, 'regular_special_loan_details_id', 'id');
    }

    /**
     * Get the expenses associated with the RegularSpecialLoanDetails
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expenses(): HasOne
    {
        return $this->hasOne(MonthlyExpenses::class, 'regular_special_loan_details_id', 'id');
    }
}
