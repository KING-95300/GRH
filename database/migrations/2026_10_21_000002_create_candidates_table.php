<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_offer_id')->nullable()->constrained('job_offers')->nullOnDelete();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('position');
            $table->string('avatar_url')->nullable();
            $table->unsignedTinyInteger('match_percentage')->nullable();
            $table->unsignedTinyInteger('experience_years')->nullable();
            $table->string('skills')->nullable(); // tags séparés par des virgules
            $table->string('source')->nullable(); // LinkedIn, Recommandation interne, Site Carrières, Keejob / Tanitjobs
            $table->decimal('salary_claim', 10, 2)->nullable();
            $table->string('availability')->nullable();
            $table->string('contract_type_target')->nullable();
            $table->string('stage')->default('received'); // voir Candidate::STAGES
            $table->date('hired_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('stage');
            $table->index('source');
            $table->index('job_offer_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
