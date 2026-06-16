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
        if (Schema::hasTable('posts')) {

            Schema::table('posts', function (Blueprint $table) {

                if (! Schema::hasColumn('posts', 'curriculum_hero')) {

                    $table->json('curriculum_hero')->nullable();

                }

            });

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('posts') &&
            Schema::hasColumn('posts', 'curriculum_hero')) {

            Schema::table('posts', function (Blueprint $table) {

                $table->dropColumn('curriculum_hero');

            });
        }
    }
};