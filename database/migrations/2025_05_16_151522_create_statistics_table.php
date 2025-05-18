<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStatisticsTable extends Migration
{
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id('statistic_id');
            $table->integer('total_books')->default(0);
            $table->integer('total_users')->default(0);
            $table->integer('total_comments')->default(0);
            $table->integer('total_ratings')->default(0);
            $table->integer('total_downloads')->default(0);
            $table->integer('total_purchases')->default(0);
            $table->timestamps();
        });

        DB::table('statistics')->insert([
            'total_books' => 0,
            'total_users' => 0,
            'total_comments' => 0,
            'total_ratings' => 0,
            'total_downloads' => 0,
            'total_purchases' => 0,
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
