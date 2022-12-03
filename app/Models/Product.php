<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function property() {
        return $this->belongsToMany(Property::class, 'product_properties','product_id','property_id');
    }

    public function image() {
        return $this->hasMany(Image::class,'product_id','id');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter) {
        return $filter->apply($builder);
    }
}
