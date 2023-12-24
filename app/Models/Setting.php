<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[   'name',
    'logo',
    'icon',
    'app_store_link',
    'play_store_link',
    'social_login_is',
    'facebook',
    'instagram',
    'twitter',
    'youtube',
    'linkedin',
    'pintest',
    'area',
    'city',
    'discrict',
    'state',
    'pincode',
    'phone',
    'mobile',
    'email',
    'website',
    'tin',
    'pan',
    'status',];
}
