<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\Models\Sub;

class County extends Model
{
    use HasFactory;

    protected $fillable = [
        'county_code',
        'county_name',
        'region_id',
    ];

    // A county belongs to a region.
    public function region(){
        return $this->belongsTo(Region::class);
    }

    // A county has many sub counties
    public function subCounty(){
        return $this->hasMany(Sub);
    }
}
