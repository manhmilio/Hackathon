<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 50);
            $table->string('password', 100);
            $table->string('email', 100);
            $table->integer('role')->default(0);
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->char('phone', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->integer('is_active')->default(1);
            $table->string('avatar', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('remember_token', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};