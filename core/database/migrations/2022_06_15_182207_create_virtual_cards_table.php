<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_cards', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->integer('account_id');
            $table->string('card_hash', 64);
            $table->string('card_pan', 32);
            $table->string('masked_card', 32);
            $table->string('cvv', 6);
            $table->string('expiration', 16);
            $table->string('card_type', 32);
            $table->text('name_on_card');
            $table->text('callback');
            $table->string('secret', 32)->nullable();
            $table->string('amount', 32);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->string('charge', 32);
            $table->integer('status')->default(1);
            $table->string('ref_id', 32)->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('address')->nullable();
            $table->text('zip_code')->nullable();
            $table->string('bg', 32)->nullable();
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
        Schema::dropIfExists('virtual_cards');
    }
}
