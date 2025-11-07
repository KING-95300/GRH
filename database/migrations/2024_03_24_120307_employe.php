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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('email')->unique();
            $table->string('seniority');
            $table->string('status');
            $table->string('bank_account');
            $table->string('cin');
            $table->string('mobile');
            $table->string('work_mobile');
            $table->string('cnss_number');
            $table->text('employee_note')->nullable();
            $table->integer('leave_rights')->nullable();
            $table->integer('token_leave_days')->nullable();
            $table->integer('token_sick_leave_days')->nullable();
            $table->timestamp('start_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
