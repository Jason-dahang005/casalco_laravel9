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

    public function loan_apps()
    {
        return $this->belongsTo(App\Model\LoanApplication::class, 'loan_applications_id', 'id');
    }


}
