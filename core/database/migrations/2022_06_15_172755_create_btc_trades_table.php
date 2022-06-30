<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBtcTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btc_trades', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable();
            $table->integer('type')->nullable();
            $table->string('trx', 16)->nullable();
            $table->string('rate', 32)->nullable();
            $table->string('total', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->integer('bank')->nullable();
            $table->string('amount', 32)->nullable();
            $table->text('wallet')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('btc_trades');
    }
}
