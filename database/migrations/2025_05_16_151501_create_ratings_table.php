<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('document_id');
            $table->integer('rating')->check('rating >= 1 AND rating <= 5');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('accounts')->onDelete('cascade');
            $table->foreign('document_id')->references('document_id')->on('documents')->onDelete('cascade');
            $table->unique(['user_id', 'document_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
