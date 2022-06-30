<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_transactions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('type');
            $table->string('amount', 32);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('charge', 32);
            $table->text('biller')->nullable();
            $table->string('ref', 32);
            $table->string('track', 64);
            $table->string('trx_ref', 64);
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
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
        Schema::dropIfExists('bill_transactions');
    }
}
