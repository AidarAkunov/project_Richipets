<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function brand() {
        return $this->hasMany(Brand::class,'subcategory_id','id');
    }

    public function vetservice() {
        return $this->hasMany(VetService::class,'subcategory_id','id');
    }

}
