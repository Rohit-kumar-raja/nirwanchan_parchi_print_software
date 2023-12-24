<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_user_id',
        'payment_type',
        'transaction_id',
        'getway_id',
        'amount',
        'bank_name',
        'ifsc_code',
        'payment_method',
        'status',
        'payment_time',
        'response_json',
        'created_at',
        'updated_at',
        'doctor_id'
    ];
}
