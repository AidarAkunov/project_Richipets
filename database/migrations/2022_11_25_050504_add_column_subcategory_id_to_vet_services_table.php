<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSubcategoryIdToVetServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vet_services', function (Blueprint $table) {
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->index('subcategory_id', 'vet_service_subcategory_idx');
            $table->foreign('subcategory_id', 'vet_service_subcategory_fk')->on('subcategories')->references('id')->onDelete('set null');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vet_services', function (Blueprint $table) {
            $table->dropForeign('vet_service_subcategory_fk');
            $table->dropIndex('vet_service_subcategory_idx');
            $table->dropColumn('subcategory_id');
        });
    }
}
