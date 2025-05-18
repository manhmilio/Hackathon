<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentPublisherTable extends Migration
{
    public function up()
    {
        Schema::create('document_publisher', function (Blueprint $table) {
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('publisher_id');
            $table->primary(['document_id', 'publisher_id']);
            $table->foreign('document_id')->references('document_id')->on('documents')->onDelete('cascade');
            $table->foreign('publisher_id')->references('publisher_id')->on('publishers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_publisher');
    }
}
