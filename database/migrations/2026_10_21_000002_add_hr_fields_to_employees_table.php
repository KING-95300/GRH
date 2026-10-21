<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->text('avatar_url')->nullable()->after('name');
            $table->string('department')->default('it')->after('position');
            $table->string('contract_type')->default('CDI')->after('department');
            $table->date('hire_date')->nullable()->after('contract_type');
            $table->date('date_of_birth')->nullable()->after('cin');
            $table->string('family_status')->nullable()->after('date_of_birth');
            $table->unsignedTinyInteger('children')->default(0)->after('family_status');
            $table->string('address')->nullable()->after('children');
            $table->string('cin_file_path')->nullable()->after('cnss_number');

            $table->index('department');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropIndex(['department']);
            $table->dropIndex(['status']);
            $table->dropColumn([
                'avatar_url',
                'department',
                'contract_type',
                'hire_date',
                'date_of_birth',
                'family_status',
                'children',
                'address',
                'cin_file_path',
            ]);
        });
    }
};
