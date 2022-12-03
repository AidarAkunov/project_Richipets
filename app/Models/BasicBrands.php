<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicBrands extends Model
{
    use HasFactory;

    const TYPE_BRAND = 1;
    const TYPE_ONE = 2;
    const TYPE_CUSTOM = 3;

    public static function getBasicFiles() {
        return [
            self::TYPE_BRAND => 'basic.layouts.brand',
            self::TYPE_ONE => 'basic.layouts.one',
            self::TYPE_CUSTOM => 'basic.layouts.custom'
        ];
    }

    public static function getBasicNames() {
        return [
            self::TYPE_BRAND => 'Создать темплейт для бренда',
            self::TYPE_ONE => 'Создать темплейт для одного товара',
            self::TYPE_CUSTOM => 'custom.blade.php'
        ];
    }

    protected  $guarded = [];

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
