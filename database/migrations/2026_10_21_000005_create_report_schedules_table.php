<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('report_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('recipients');
            $table->string('frequency'); // mensuel, trimestriel, hebdomadaire, sur_evenement
            $table->string('schedule_detail')->nullable();
            $table->string('format'); // CSV, PDF, XLSX
            $table->timestamp('last_sent_at')->nullable();
            $table->string('status')->default('actif'); // actif, en_veille
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('report_schedules');
    }
};
