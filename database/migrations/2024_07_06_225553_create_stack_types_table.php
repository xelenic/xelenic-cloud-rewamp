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
        Schema::create('stack_types', function (Blueprint $table) {
            $table->id();
            $table->text('stack');
            $table->text('language');
            $table->json('files_structure');
            $table->json('deploy_script');
            $table->text('default_env_path');
            $table->json('default_database_variables');
            $table->text('description')->nullable();
            $table->text('logo')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stack_types');
    }
};
