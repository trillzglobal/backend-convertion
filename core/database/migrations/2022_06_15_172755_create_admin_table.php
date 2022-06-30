<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password');
            $table->string('username');
            $table->integer('profile')->nullable();
            $table->integer('support')->nullable();
            $table->integer('promo')->nullable();
            $table->integer('message')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('settlement')->nullable();
            $table->integer('transfer')->nullable();
            $table->integer('request_money')->nullable();
            $table->integer('donation')->nullable();
            $table->integer('single_charge')->nullable();
            $table->integer('subscription')->nullable();
            $table->integer('merchant')->nullable();
            $table->integer('invoice')->nullable();
            $table->integer('charges')->nullable();
            $table->integer('store')->nullable();
            $table->integer('blog')->nullable();
            $table->integer('bill')->nullable();
            $table->integer('vcard')->nullable();
            $table->integer('crypto')->nullable();
            $table->string('remember_token', 64)->nullable();
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
        Schema::dropIfExists('admin');
    }
}
