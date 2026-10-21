<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->constrained('candidates')->cascadeOnDelete();
            $table->dateTime('scheduled_at');
            $table->string('interviewer');
            $table->string('type')->default('rh'); // rh, technical, final
            $table->string('status')->default('planned'); // planned, done, cancelled
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('candidate_id');
            $table->index('scheduled_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
