<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class County extends Model
{
    use HasFactory;

    protected $fillable = [
        'county_code',
        'county_name',
        'region_id',
    ];

    public function region(){
        return $this->belongsTo(RegionController::class, 'region_id');
    }
}
