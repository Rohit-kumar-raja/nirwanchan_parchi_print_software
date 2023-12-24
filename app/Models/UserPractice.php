<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPractice extends Model
{
    use HasFactory;

    protected $fillable=[
        'practice_id',
        'app_user_id',
        'option',
        'ans',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
