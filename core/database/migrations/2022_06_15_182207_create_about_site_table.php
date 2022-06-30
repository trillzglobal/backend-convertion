<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_site', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('about')->nullable();
            $table->text('terms')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('about_site');
    }
}
