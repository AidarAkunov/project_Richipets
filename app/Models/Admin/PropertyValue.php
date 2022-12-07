<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyValue extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function property() {
        return $this->belongsTo(Property::class,'property_id','id');
    }
}
