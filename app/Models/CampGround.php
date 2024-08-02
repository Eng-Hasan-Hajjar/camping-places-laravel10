<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampGround extends Model
{
    use HasFactory;

    // تحديد أنواع المواقع
    const TYPE_MOUNTAIN = 2;
    const TYPE_DESERT = 1;
    const TYPE_FOREST = 0;


    protected $fillable = [
        'name', 'description', 'country','city',
        'region', 'cm_type', 'cm_season','campGround_image','google_image','forecast',

    ];
    public function guids()
    {
        return $this->belongsToMany(Guide::class);
    }


    /**
     * نطاق لتصفية الأماكن بناءً على فوبيا المرتفعات
     */
    public function scopeWithoutMountain($query, $hasPhobiaHeights)
    {
        if ($hasPhobiaHeights) {
            return $query->where('cm_type', '!=', self::TYPE_MOUNTAIN);
        }
        return $query;
    }

    // نطاقات أخرى بناءً على أنواع الفوبيا الأخرى
    public function scopeWithoutForest($query, $hasPhobiaDark)
    {
        if ($hasPhobiaDark) {
            return $query->where('cm_type', '!=', self::TYPE_FOREST);
        }
        return $query;
    }

    public function scopeWithoutDesert($query, $hasPhobiaOpenSpace)
    {
        if ($hasPhobiaOpenSpace) {
            return $query->where('cm_type', '!=', self::TYPE_DESERT);
        }
        return $query;
    }


}
