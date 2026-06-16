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

            if (!Schema::hasColumn('posts', 'curriculum_preview')) {
                $table->json('curriculum_preview')->nullable();
            }

            if (!Schema::hasColumn('posts', 'projects_you_will_build')) {
                $table->json('projects_you_will_build')->nullable();
            }

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {

            if (Schema::hasColumn('posts', 'curriculum_preview')) {
                $table->dropColumn('curriculum_preview');
            }

            if (Schema::hasColumn('posts', 'projects_you_will_build')) {
                $table->dropColumn('projects_you_will_build');
            }

        });
    }
};