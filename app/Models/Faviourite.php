<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faviourite extends Model
{
    use HasFactory;
    protected $fillable=[
        'app_user_id',
        'clinic_id',
        'doctor_id',
        'medical_department_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function medical_department()
    {
        return $this->belongsTo(MedicalDepartment::class);
    }
}
