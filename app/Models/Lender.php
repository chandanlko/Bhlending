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
    						'dob',
    						'vat',
    						'id_lender',
    						'address',
    						'password',
                            'status',
                            'image',
                            'is_email_verified'
    					];
}
