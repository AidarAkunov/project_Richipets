<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProductIdToBasicBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_brands', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable();
            $table->index('product_id', 'product_basic_brand_idx');
            $table->foreign('product_id', 'product_basic_brand_fk')->on('products')->references('id')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basic_brands', function (Blueprint $table) {
            $table->dropForeign('product_basic_brand_fk');
            $table->dropIndex('product_basic_brand_idx');
            $table->dropColumn('product_id');
        });
    }
}
