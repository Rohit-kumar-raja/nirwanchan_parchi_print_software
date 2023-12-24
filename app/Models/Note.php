<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'pdf', 'video', 'is_publish','created_by', 'updated_by', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}