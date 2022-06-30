<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUiDesignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ui_design', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('s6_title')->nullable();
            $table->text('s7_title')->nullable();
            $table->text('s7_body')->nullable();
            $table->string('s7_image', 32)->nullable();
            $table->string('s8_image', 32)->nullable();
            $table->text('s8_title')->nullable();
            $table->text('s8_body')->nullable();
            $table->string('s9_image', 32)->nullable();
            $table->text('s9_title')->nullable();
            $table->text('s9_body')->nullable();
            $table->text('s6_body')->nullable();
            $table->text('s5_title')->nullable();
            $table->text('s5_body')->nullable();
            $table->text('s4_title')->nullable();
            $table->text('s4_body')->nullable();
            $table->string('s4_image', 32)->nullable();
            $table->text('s3_title')->nullable();
            $table->text('s3_body')->nullable();
            $table->string('s3_image', 32)->nullable();
            $table->string('s2_image', 32)->nullable();
            $table->text('s2_title')->nullable();
            $table->text('s2_body')->nullable();
            $table->text('s1_title')->nullable();
            $table->text('header_title')->nullable();
            $table->text('header_body')->nullable();
            $table->integer('nav_type')->nullable();
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
        Schema::dropIfExists('ui_design');
    }
}
