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
        'specialization_id',
        'doctor_id',
        'slot_id',
        'appointment_date',
        'specialization_name',
        'doctor_name',
        'start_time',
        'end_time',
        'patient_message',
        'doctor_remarks',
        'status',
    ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'slot_id');
    }
}
