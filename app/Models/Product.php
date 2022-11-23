<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function property() {
        return $this->belongsToMany(Property::class, 'product_properties','product_id','property_id');
    }
}
