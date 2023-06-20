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
        Schema::create('topic_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::table('topic_users', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('topic_users', function (Blueprint $table) {
            $table->foreignId('topic_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_users');
    }
};
