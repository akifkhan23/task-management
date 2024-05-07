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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_no')->nullable();
            $table->string('job_title')->nullable();
            $table->longtext('bio')->nullable();
            $table->date('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('security')->default(0)->comment('0=No security , 1 = Email verification , 2 = Authentiator App');
            $table->timestamp('email_verified_at')->nullable();
            $table->longtext('image')->nullable();
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
