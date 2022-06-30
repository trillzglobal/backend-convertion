<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountrySupportedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_supported', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('country_id');
            $table->integer('coin_id')->nullable();
            $table->string('rate', 32)->nullable();
            $table->integer('type')->nullable();
            $table->integer('status')->nullable()->default(1);
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
        Schema::dropIfExists('country_supported');
    }
}
