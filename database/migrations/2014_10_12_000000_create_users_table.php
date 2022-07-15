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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('referar_code')->unique()->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('is_notified')->default(false);
            $table->string('facebook')->nullable();
            $table->string('qr_code')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->default(1);
            $table->foreign('parent_id')->references('id')->on('users');
            $table->rememberToken();
            $table->timestamps();
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
};
