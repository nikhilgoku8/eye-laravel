<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';

    protected $fillable = [
        'name',
        'specialization_id',
        'is_active',
    ];

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
