<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'page',
        'data',
        's_no',
        'loksabha_name',
        'assembly_name',
        'both',
        'part',
        'section',
        'epic',
        'nirwachan_name',
        'relative_name',
        'age',
        'house',
        'gender',
        'nirvachan_name_eng',
        'relative_name_eng',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
