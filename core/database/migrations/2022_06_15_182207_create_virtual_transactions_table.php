<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_transactions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->text('virtual_id');
            $table->string('amount', 32);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->text('description');
            $table->string('trx', 32);
            $table->integer('type');
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
        Schema::dropIfExists('virtual_transactions');
    }
}
