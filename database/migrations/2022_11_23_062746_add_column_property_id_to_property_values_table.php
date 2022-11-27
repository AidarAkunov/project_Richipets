<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPropertyIdToPropertyValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_values', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id')->nullable();
            $table->index('property_id', 'property_values_property_idx');
            $table->foreign('property_id', 'property_values_property_fk')->on('properties')->references('id')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_values', function (Blueprint $table) {
            $table->dropForeign('property_values_property_fk');
            $table->dropIndex('property_values_property_idx');
            $table->dropColumn('property_id');
        });
    }
}
