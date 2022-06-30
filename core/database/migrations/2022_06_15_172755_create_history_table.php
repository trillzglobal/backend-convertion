<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('amount', 32)->nullable();
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->string('ref', 32);
            $table->integer('main');
            $table->integer('type')->nullable();
            $table->integer('status')->default(1);
            $table->text('stripe_id')->nullable();
            $table->integer('chargeback')->default(0);
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
        Schema::dropIfExists('history');
    }
}
