<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnBrandIdToBasicBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_brands', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->index('brand_id', 'basic_brand_idx');
            $table->foreign('brand_id', 'basic_brand_fk')->on('brands')->references('id')->onDelete('set null');
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
            $table->dropForeign('basic_brand_fk');
            $table->dropIndex('basic_brand_idx');
            $table->dropColumn('brand_id');
        });
    }
}
