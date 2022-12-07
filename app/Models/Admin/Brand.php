<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function subcategory() {
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }

    public function product() {
        return $this->hasMany(Product::class,'brand_id','id');
    }
}
