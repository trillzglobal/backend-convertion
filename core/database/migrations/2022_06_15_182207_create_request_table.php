<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_id', 32);
            $table->integer('user_id');
            $table->string('email');
            $table->float('amount', 10, 0);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('charge', 32)->nullable();
            $table->integer('status')->default(0);
            $table->string('confirm', 8)->nullable();
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
        Schema::dropIfExists('request');
    }
}
