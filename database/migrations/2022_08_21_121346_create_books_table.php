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
            $table->string('title', 255);
            $table->date('published')->nullable();
            $table->text('annotation')->nullable();
            $table->double('price', 15, 2);
            $table->string('edition', 100)->nullable();
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('pages');
            $table->string('publisher');
            $table->string('cover')->default('default.jpg');
            $table->integer('quantity')->default(1);
            $table->timestamps();

            //$table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
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
