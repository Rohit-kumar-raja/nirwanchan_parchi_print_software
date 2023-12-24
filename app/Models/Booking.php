<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'service_id',
        'doctor_id',
        'app_user_id',
        'doctor_slot_id',
        'transaction_id',
        'invoice_no',
        'platform_charge',
        'booking_date',
        'disease_name',
        'patient_name',
        'patient_gender',
        'patient_mobile',
        'patient_email',
        'patient_dob',
        'patient_address',
        'patient_blood_group',
        'patient_profile_pic',
        'aadhar_no',
        'adhar_card_front',
        'adhar_card_back',
        'booking_amount',
        'full_amount',
        'remaining_amount',
        'doc',
        'description',
        'booking_status',
        'booking_status_change_by',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function doctorslot()
    {
        return $this->belongsTo(DoctorSlot::class, 'doctor_slot_id', 'id');
    }

    public function app_user()
    {
        return $this->belongsTo(AppUser::class);
    }


    //
}
