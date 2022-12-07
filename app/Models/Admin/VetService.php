<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VetService extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function subcategory() {
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }
}
