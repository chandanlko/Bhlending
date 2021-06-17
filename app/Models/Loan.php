<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable=[
    	'loan_amount',
    	'duration',
    	'avarage_monthly_income',
    	'business_type',
    	'status',
    	'lenderid',
    	'credit_score',
    	'request_reason'
    ];
}
