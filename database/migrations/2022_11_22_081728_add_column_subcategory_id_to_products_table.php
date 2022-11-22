<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSubcategoryIdToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->index('subcategory_id', 'product_subcategory_idx');
            $table->foreign('subcategory_id', 'product_subcategory_fk')->on('subcategories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('product_subcategory_fk');
            $table->dropIndex('product_subcategory_idx');
            $table->dropColumn('subcategory_id');
        });
    }
}
