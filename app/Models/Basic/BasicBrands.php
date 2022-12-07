<?php

namespace App\Models\Basic;

use App\Models\Admin\Brand;
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
            self::TYPE_BRAND => 'basic.main.content.brand',
            self::TYPE_ONE => 'basic.main.content.one',
            self::TYPE_CUSTOM => 'basic.main.content.custom'
        ];
    }

    public static function getBasicNames() {
        return [
            self::TYPE_BRAND => 'Создать темплейт для бренда',
            self::TYPE_ONE => 'Создать темплейт для одного товара',
            self::TYPE_CUSTOM => 'Создать кастомный темплейт'
        ];
    }

    protected  $guarded = [];

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
