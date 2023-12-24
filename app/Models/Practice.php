<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'questions', 'option1', 'option2', 'option3', 'option4', 'answere', 'is_publish', 'status', 'created_by','updated_by', 'deleted_by'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
