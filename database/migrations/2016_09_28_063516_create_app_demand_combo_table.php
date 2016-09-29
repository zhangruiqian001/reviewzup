<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppDemandComboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_demand_combos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('total_price')->default(0);
            $table->string('app_url');
            $table->integer('status')->default(0); //[0:'initial',1:'paying',2:'processing',3:'completed']
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
        Schema::drop('add_demand_combos');
    }
}
