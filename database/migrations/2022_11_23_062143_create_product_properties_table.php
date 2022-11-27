<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_properties', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('product_id');
            $table-> unsignedBigInteger('property_id');

            $table->index('product_id', 'product_properties_product_idx');
            $table->index('property_id', 'product_properties_property_idx');

            $table->foreign('product_id', 'product_properties_product_fk')->on('products')->references('id')->onDelete('cascade');;
            $table->foreign('property_id', 'product_properties_property_fk')->on('properties')->references('id')->onDelete('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_properties');
    }
}
