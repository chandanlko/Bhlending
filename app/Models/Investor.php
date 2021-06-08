<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    protected $fillable=[
    						'first_name',
    						'last_name',
    						'phone',
    						'email',
    						'password',
    						'address',
    						'invested_amount',
    						'offer_rate',
    						'birth_place',
    						'dob',
    						'citizenship',
    						'investment_type',
    						'investor_type',
    						'status',
    					];
}
