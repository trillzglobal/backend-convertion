<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('reference', 32);
            $table->string('secret', 6)->nullable();
            $table->integer('user_id');
            $table->string('amount', 32);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->integer('status');
            $table->string('bank_id', 32)->nullable();
            $table->integer('type')->nullable();
            $table->integer('sub_id')->nullable();
            $table->string('next_settlement', 32)->nullable();
            $table->timestamp('created_at')->nullable();
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
        Schema::dropIfExists('w_history');
    }
}
