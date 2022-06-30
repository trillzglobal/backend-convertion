<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('amount', 191);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('payment_id', 32);
            $table->string('date', 32);
            $table->integer('status');
            $table->integer('token');
            $table->text('trans_id');
            $table->text('details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposit');
    }
}
