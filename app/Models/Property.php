<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function product() {
        return $this->belongsToMany(Product::class, 'product_properties','property_id','product_id');
    }
}
