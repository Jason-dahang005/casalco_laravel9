<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_type',
        'product_loan',
        'description',
        'max_amount',
        'min_amount',
        'max_term',
        'min_term'
    ];
}
