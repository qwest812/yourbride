<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('h1');
            $table->text('image')->nullable();
            $table->text('short_content')->nullable();
            $table->text('title')->nullable();
            $table->text('og_description')->nullable();
            $table->text('description')->nullable();
            $table->string('keywords')->nullable();
            $table->float('rating_site', 8,1)->nullable();
            $table->integer('votes')->nullable();
            $table->integer('reply_rate')->nullable();
            $table->integer('girls_online')->nullable();
            $table->string('visit_site')->nullable();
            $table->string('local_url');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
