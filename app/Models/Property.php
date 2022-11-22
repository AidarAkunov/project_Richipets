<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function offer() {
        return $this->belongsToMany(Offer::class, 'offer_properties', 'property_id', 'offer_id');
    }
}
