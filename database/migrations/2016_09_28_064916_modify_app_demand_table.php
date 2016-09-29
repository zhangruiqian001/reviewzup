<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyAppDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_demands', function (Blueprint $table) {
            //
            $table->integer('combo_id')->references('id')->on('app_demand_combos');
            $table->dropColumn('user_id');
            $table->dropColumn('app_url');
            $table->dropColumn('original_price');
            $table->dropColumn('unit_price');
            $table->dropColumn('total_price');
            $table->decimal('unit_service_price')->default(0);
            $table->decimal('app_price')->default(0);
            $table->decimal('subtotal')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('add_demands', function (Blueprint $table) {
            //
        });
    }
}
