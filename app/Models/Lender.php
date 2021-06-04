<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    use HasFactory;
    protected $fillable=[
    						'first_name',
    						'last_name',
    						'phone',
    						'email',
    						'business_type',
    						'business_name',
    						'revenue',
    						'credit_score',
    						'salary_from_business',
    						'other_family_income',
    						'monthly_expenses',
    						'bsnk_rupty',
    						'password',
    					];
}
