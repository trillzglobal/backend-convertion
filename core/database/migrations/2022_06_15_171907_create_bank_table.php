<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('bank_id')->nullable();
            $table->string('acct_no', 32)->nullable();
            $table->text('acct_name')->nullable();
            $table->text('account_type')->nullable();
            $table->text('routing_number')->nullable();
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('bank');
    }
}
