<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookPublisherTable extends Migration
{
    public function up()
    {
        Schema::create('book_publisher', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('publisher_id');
            $table->primary(['book_id', 'publisher_id']);

            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_publisher');
    }
}