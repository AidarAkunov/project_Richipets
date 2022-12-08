<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyValue extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function products() {
        return $this->belongsToMany(Product::class,'products');
    }
}
