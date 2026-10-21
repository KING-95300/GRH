<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('department');
            $table->string('contract_type'); // CDI, CDD, SIVP, Karama, Consulting
            $table->string('status')->default('open'); // open, pending_validation, closed
            $table->string('location')->nullable();
            $table->decimal('salary_min', 10, 2)->nullable();
            $table->decimal('salary_max', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index('status');
            $table->index('department');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
