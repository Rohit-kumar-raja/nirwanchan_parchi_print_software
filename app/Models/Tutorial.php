<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'questions',
        'keyword',
        'description',
        'type',
        'og_description',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $casts = [
        'created_at'  => 'date:d-M-Y',
    ];

    public function all_tutorial(){
        return $this->hasMany(TutorialDetails::class);
    }
    public function description(){
        return $this->belongsTo(TutorialDetails::class,'id','tutorial_id');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function creator(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updator(){
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
