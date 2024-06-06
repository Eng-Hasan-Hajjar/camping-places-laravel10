<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'camp_doctor_guid_id', 'start_date', 'end_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function campDoctorGuid()
    {
        return $this->belongsTo(CampDoctorGuid::class);
    }
    public function campGround()
    {
        return $this->belongsTo(CampGround::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }

}
