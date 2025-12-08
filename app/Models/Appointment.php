<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_phone',
        'doctor_id',
        'slot_id',
        'appointment_date',
        'status',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'slot_id');
    }
}
