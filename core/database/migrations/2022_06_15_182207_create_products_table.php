<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('cat_id')->nullable();
            $table->string('name');
            $table->string('amount', 32);
            $table->string('rate', 32)->nullable();
            $table->string('currency', 32)->nullable();
            $table->integer('quantity');
            $table->integer('sold')->nullable()->default(0);
            $table->integer('rq')->nullable();
            $table->integer('charge')->nullable();
            $table->text('address')->nullable();
            $table->text('note')->nullable();
            $table->integer('add_status')->default(0);
            $table->integer('quantity_status')->default(0);
            $table->integer('note_status')->default(0);
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->integer('active')->nullable()->default(1);
            $table->string('ref_id', 16);
            $table->integer('new')->nullable()->default(0);
            $table->integer('shipping_status')->default(0);
            $table->integer('shipping_fee')->nullable();
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
        Schema::dropIfExists('products');
    }
}
