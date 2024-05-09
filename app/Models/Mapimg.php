<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapimg extends Model
{
    use HasFactory;
    protected $table = "mapimgs";

    protected $fillable = ['image','campGround_id'];

    public function campGround(){
        return $this->belongsTo(CampGround::class,'campGound','id');
    }
}
