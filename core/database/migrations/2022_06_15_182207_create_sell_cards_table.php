<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_cards', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('trx', 16)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('plan_id')->nullable();
            $table->string('amount', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->integer('bank')->nullable();
            $table->string('rate', 32)->nullable();
            $table->string('total', 32)->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('c_image', 32)->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell_cards');
    }
}
