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

    public static function getBasicFiles() {
        return [
            self::TYPE_BRAND => 'basic.main.content.brand',
            self::TYPE_ONE => 'basic.main.content.one',
        ];
    }

    public static function getBasicNames() {
        return [
            self::TYPE_BRAND => 'Создать темплейт для бренда',
            self::TYPE_ONE => 'Создать темплейт для одного товара',
        ];
    }

    protected  $guarded = [];

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
