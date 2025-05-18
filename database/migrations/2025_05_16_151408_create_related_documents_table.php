<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRelatedDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('related_documents', function (Blueprint $table) {
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('related_document_id');
            $table->primary(['document_id', 'related_document_id']);
            $table->foreign('document_id')->references('document_id')->on('documents')->onDelete('cascade');
            $table->foreign('related_document_id')->references('document_id')->on('documents')->onDelete('cascade');
        });

        // Thêm ràng buộc CHECK bằng raw SQL
        DB::statement('ALTER TABLE related_documents ADD CONSTRAINT no_self_reference CHECK (document_id != related_document_id)');
    }

    public function down()
    {
        Schema::dropIfExists('related_documents');
    }
}


