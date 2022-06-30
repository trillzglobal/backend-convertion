<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('gateway_id')->nullable();
            $table->string('amount', 191)->nullable();
            $table->string('charge', 191)->nullable();
            $table->string('btc_amo', 32)->nullable();
            $table->string('btc_wallet', 191)->nullable();
            $table->string('trx', 191)->nullable();
            $table->integer('status')->default(0);
            $table->string('secret', 8)->nullable();
            $table->text('txn_id')->nullable();
            $table->text('status_url')->nullable();
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
        Schema::dropIfExists('deposits');
    }
}
