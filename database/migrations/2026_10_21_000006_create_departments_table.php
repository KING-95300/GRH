<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('tag')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('manager_id')->nullable()->constrained('employees')->nullOnDelete();
            $table->json('specialties')->nullable();
            $table->json('tags')->nullable();
            $table->json('sub_teams')->nullable();
            $table->decimal('monthly_budget', 12, 3)->default(0);
            $table->unsignedTinyInteger('occupancy')->default(0);
            $table->string('occupancy_label')->default('Taux occupation');
            $table->string('metric_value')->nullable();
            $table->string('metric_color')->default('text-on-surface');
            $table->string('specialties_label')->default('Spécialisations');
            $table->string('code')->nullable();
            $table->string('dot_color')->default('bg-primary');
            $table->string('text_color')->default('text-primary');
            $table->string('bar_color')->default('bg-primary');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
