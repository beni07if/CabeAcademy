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
            $table->text('outline')->nullable();
            $table->text('draft_report')->nullable();
            $table->text('report')->nullable();
            $table->text('slide_p')->nullable();
            $table->text('comment')->nullable();
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
