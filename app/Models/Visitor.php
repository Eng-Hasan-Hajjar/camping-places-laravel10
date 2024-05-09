<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'work','hobby','nationality',
    'current_location', 'gender',
    'is_phobia_dark', 'is_phobia_animals','is_phobia_fly','is_phobia_see',
    'is_phobia_open_space', 'is_phobia_hights',
    'birthday', 'num_companion',

];

}
