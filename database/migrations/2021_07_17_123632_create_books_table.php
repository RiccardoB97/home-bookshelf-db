<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('author', 50);
            $table->char('ISBN', 13)->nullable();
            $table->string('publisher', 50)->nullable();
            $table->string('genre', 50)->nullable();
            $table->text('cover')->nullable();
            $table->tinyInteger('gaia_vote')->nullable();
            $table->tinyInteger('mum_vote')->nullable();
            $table->boolean('gaia_read')->nullable();
            $table->boolean('mum_read')->nullable();
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
        Schema::dropIfExists('books');
    }
}
