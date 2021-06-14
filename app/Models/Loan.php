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
    	'loan_type',
    	'interest',
    	'status',
    	'lenderid'
    ];
}
