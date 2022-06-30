<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('merchant_key', 32)->unique('merchant_key');
            $table->string('name', 191)->nullable();
            $table->text('email')->nullable();
            $table->string('ref_id', 32)->nullable();
            $table->integer('status');
            $table->timestamps();

            $table->index(['id'], 'id');
            $table->index(['merchant_key'], 'merchant_key_3');
            $table->index(['merchant_key'], 'merchant_key_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
}
