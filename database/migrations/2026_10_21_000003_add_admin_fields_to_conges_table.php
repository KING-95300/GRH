<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('conges', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->nullable()->after('id')->index();
            $table->string('type', 30)->default('annuel')->after('employee_name');
            $table->string('status', 20)->default('pending')->after('type');
            $table->unsignedSmallInteger('working_days')->default(0)->after('end_date');
            $table->string('attachment_path')->nullable()->after('reason');
            $table->string('attachment_name')->nullable()->after('attachment_path');
            $table->timestamp('reviewed_at')->nullable()->after('attachment_name');
            $table->unsignedBigInteger('reviewed_by')->nullable()->after('reviewed_at')->index();
            $table->text('decision_note')->nullable()->after('reviewed_by');
            $table->index(['status', 'start_date']);
            $table->index(['type', 'start_date']);
        });
    }

    public function down(): void
    {
        Schema::table('conges', function (Blueprint $table) {
            $table->dropIndex(['status', 'start_date']);
            $table->dropIndex(['type', 'start_date']);
            $table->dropColumn([
                'employee_id',
                'type',
                'status',
                'working_days',
                'attachment_path',
                'attachment_name',
                'reviewed_at',
                'reviewed_by',
                'decision_note',
            ]);
        });
    }
};
