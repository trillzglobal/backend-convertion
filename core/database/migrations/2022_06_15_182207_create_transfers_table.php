<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_id', 32);
            $table->string('amount', 32);
            $table->string('from_rate', 32)->nullable();
            $table->string('from_currency', 32)->nullable();
            $table->string('to_rate', 32)->nullable();
            $table->string('to_currency', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->integer('sender_id');
            $table->integer('receiver_id')->nullable();
            $table->string('temp')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->integer('type')->default(1);
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
        Schema::dropIfExists('transfers');
    }
}
