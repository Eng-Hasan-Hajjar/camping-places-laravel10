<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'specialty', 'phone',
        'is_free',
    ];
    public function campgrounds()
    {
        return $this->belongsToMany(CampGround::class);
    }

}
