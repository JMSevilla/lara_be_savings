<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use HasApiTokens, Notifiable;

class Clients extends Model
{
    
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'email',
        'province',
        'city',
        'zipcode',
        'address',
        'account_type',
        'deposit_amount',
        'mobile_number'
    ];
}
