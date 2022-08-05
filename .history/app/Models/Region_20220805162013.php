<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Count;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function county(){
        return $this->hasMany();
    }
}
