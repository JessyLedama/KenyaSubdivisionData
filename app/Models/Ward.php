<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subcounty_id',
    ];

    // Wards belong to Sub Counties/Constituencies.
    public function subcounty()
    {
        return $this->belongsTo(SubCounty::class, 'subcounty_id');
    }

}
