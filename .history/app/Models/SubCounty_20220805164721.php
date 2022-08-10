<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCounty;

class SubCounty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'county_id',
    ];

    // A sub county belongs to a county.
    public function county(){
        return $this->belongsTo()
    }
}
