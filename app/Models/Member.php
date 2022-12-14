<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_applications_id',
        'users_id'
    ];

    // public function user(){
    //     return $this->belongsTo(User::class, 'users_id');
    // }

    public function loan(){
        return $this->belongsTo(LoanApplication::class, 'id');
    }
}
