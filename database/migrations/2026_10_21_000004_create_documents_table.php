<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained('employees')->nullOnDelete();
            $table->string('name');
            $table->string('original_name');
            $table->string('path');
            $table->unsignedBigInteger('size');
            $table->string('mime_type');
            $table->string('category'); // contrats, identite, paie, diplomes, attestations
            $table->string('status')->default('actif'); // actif, en_attente_signature, cloture, conforme
            $table->date('expires_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('category');
            $table->index('status');
            $table->index('employee_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
