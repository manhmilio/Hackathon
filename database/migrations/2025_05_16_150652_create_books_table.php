<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id'); 
            $table->string('title', 200); 
            $table->string('isbn', 13)->unique(); //International Standard Book Number
            $table->text('description')->nullable(); 
            $table->date('publication_date')->nullable(); 
            $table->string('image', 255)->nullable(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}

?>
