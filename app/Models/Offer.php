<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property() {
        return $this->belongsToMany(Property::class, 'offer_properties', 'offer_id', 'propery_id');
    }
}
