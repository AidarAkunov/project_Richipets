<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_properties');
    }

    public function propertyValue() {
        return $this->hasMany(PropertyValue::class,'property_id','id');
    }
}
