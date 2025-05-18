<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('book_category', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('category_id');
            $table->primary(['book_id', 'category_id']);

            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });

        Schema::table('book_category', function (Blueprint $table) {
            // Thêm cột document_id nếu chưa tồn tại
            if (!Schema::hasColumn('book_category', 'document_id')) {
                $table->unsignedBigInteger('document_id');
            }
            
            // Tạo khóa ngoại
            $table->foreign('document_id')
                  ->references('document_id')
                  ->on('documents')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_category');
    }
}