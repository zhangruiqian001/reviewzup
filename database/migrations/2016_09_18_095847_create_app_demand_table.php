<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_demands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('app_url')->nullable();
            $table->string('country')->default('cn');
            $table->integer('amount')->default(0);
            $table->integer('discount_id')->default(0);
            $table->decimal('original_price')->default(0);
            $table->decimal('unit_price')->default(0);
            $table->decimal('total_price')->default(0);
            $table->integer('status')->default(0);//[0:'initial',1:'processing',2:'completed']
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
        Schema::drop('app_demands');
    }
}
