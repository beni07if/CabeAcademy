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
        Schema::create('progress', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('outline')->nullable();
            $table->string('draft_report')->nullable();
            $table->string('report')->nullable();
            $table->string('slide_p')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });

        Schema::table('progress', function (Blueprint $table) {
            $table->foreignId('topic_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
