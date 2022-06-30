<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('email', 191)->nullable();
            $table->string('card_number', 32)->nullable();
            $table->string('ip_address', 32)->nullable();
            $table->string('first_name', 191)->nullable();
            $table->string('last_name', 191)->nullable();
            $table->integer('sender_id')->nullable();
            $table->integer('receiver_id');
            $table->float('amount', 10, 0);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->integer('type');
            $table->string('payment_type', 32)->nullable();
            $table->string('ref_id', 32);
            $table->integer('status')->nullable()->default(0);
            $table->integer('payment_link');
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
        Schema::dropIfExists('transactions');
    }
}
