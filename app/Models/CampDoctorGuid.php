<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampDoctorGuid extends Model
{
    use HasFactory;
    protected $fillable = [
        'camp_ground_id',
        'doctor_id',
        'guide_id',
        'name',
        'display_name',
    ];

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
