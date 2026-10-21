<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->cascadeOnDelete();
            $table->string('period', 7);
            $table->decimal('base_salary', 12, 3)->default(0);
            $table->decimal('prime', 12, 3)->default(0);
            $table->decimal('transport_allowance', 12, 3)->default(0);
            $table->decimal('cnss', 12, 3)->default(0);
            $table->decimal('taxable_base', 12, 3)->default(0);
            $table->decimal('irpp', 12, 3)->default(0);
            $table->decimal('css', 12, 3)->default(0);
            $table->decimal('net', 12, 3)->default(0);
            $table->string('status')->default('ready');
            $table->timestamp('paid_at')->nullable();
            $table->string('bank')->nullable();
            $table->string('rib')->nullable();
            $table->timestamps();

            $table->unique(['employee_id', 'period']);
            $table->index('period');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payslips');
    }
};
