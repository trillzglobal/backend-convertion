<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->increments('id');
            $table->string('main_name', 191)->nullable();
            $table->string('name', 191);
            $table->string('gateimg', 191)->nullable();
            $table->string('minamo', 191)->nullable();
            $table->string('maxamo', 191)->nullable();
            $table->string('charge', 32)->nullable();
            $table->string('val1', 191)->nullable();
            $table->string('val2', 191)->nullable();
            $table->string('val3', 191)->nullable();
            $table->string('val4', 191)->nullable();
            $table->integer('status')->nullable()->default(1);
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
        Schema::dropIfExists('gateways');
    }
}
