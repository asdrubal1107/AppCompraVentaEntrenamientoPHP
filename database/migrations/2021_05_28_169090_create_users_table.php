<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->foreignId('id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreignId('idRol')->references('id')->on('roles');
            $table->string('usuario')->unique();
            $table->string('password', 191);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('condicion')->default(1);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
