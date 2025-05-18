<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id('document_id');
            $table->unsignedBigInteger('book_id'); 
            $table->string('title', 200);
            $table->string('file_path', 255); 
            $table->decimal('price', 10, 2)->default(0.00); 
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable(); 
            $table->unsignedBigInteger('uploaded_by'); 
            $table->timestamps();

            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('uploaded_by')->references('user_id')->on('accounts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
