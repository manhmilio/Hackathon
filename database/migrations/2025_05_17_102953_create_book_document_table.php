<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDocumentTable extends Migration
{
    public function up()
    {
        Schema::create('book_document', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('document_id');
            $table->primary(['book_id', 'document_id']);

            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('document_id')->references('document_id')->on('documents')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_document');
    }
}
?>