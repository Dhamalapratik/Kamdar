<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->string('about')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('phone_number')->nullable()->unique();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('working_field')->nullable();
            $table->string('experience')->nullable();
            $table->string('citizenship_number')->nullable();
            $table->string('citizenship_front')->nullable();
            $table->string('citizenship_back')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
