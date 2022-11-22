<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_properties', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('offer_id');
            $table-> unsignedBigInteger('property_id');

            $table->index('offer_id', 'offer_property_offer_idx');
            $table->index('property_id', 'offer_property_property_idx');

            $table->foreign('offer_id', 'offer_property_offer_fk')->on('offers')->references('id');
            $table->foreign('property_id', 'offer_property_property_fk')->on('properties')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_properties');
    }
}
