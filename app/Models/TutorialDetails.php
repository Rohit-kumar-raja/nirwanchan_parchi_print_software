<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorialDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'tutorial_id',
        'value',
        'created_at',
        'updated_at'
    ];
}
