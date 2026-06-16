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
        Schema::table('posts', function (Blueprint $table) {

            if (!Schema::hasColumn('posts', 'interactive_roadmap')) {
                $table->json('interactive_roadmap')->nullable();
            }

            if (!Schema::hasColumn('posts', 'industry_projects')) {
                $table->json('industry_projects')->nullable();
            }

            if (!Schema::hasColumn('posts', 'average_salary')) {
                $table->string('average_salary')->nullable();
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {

            if (Schema::hasColumn('posts', 'interactive_roadmap')) {
                $table->dropColumn('interactive_roadmap');
            }

            if (Schema::hasColumn('posts', 'industry_projects')) {
                $table->dropColumn('industry_projects');
            }

            if (Schema::hasColumn('posts', 'average_salary')) {
                $table->dropColumn('average_salary');
            }

        });
    }
};