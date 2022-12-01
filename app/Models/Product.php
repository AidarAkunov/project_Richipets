<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Filterable;

    protected  $guarded = [];

    public function property() {
        return $this->belongsToMany(Property::class, 'product_properties','product_id','property_id');
    }
}
