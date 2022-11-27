<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSubcategoryIdToBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->index('subcategory_id', 'brand_subcategory_idx');
            $table->foreign('subcategory_id', 'brand_subcategory_fk')->on('subcategories')->references('id')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->dropForeign('brand_subcategory_fk');
            $table->dropIndex('brand_subcategory_idx');
            $table->dropColumn('subcategory_id');
        });
    }
}
