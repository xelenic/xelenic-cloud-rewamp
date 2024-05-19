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
        Schema::create('repos', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('full_name');
            $table->text('description')->nullable();
            $table->string('fork');
            $table->string('url');
            $table->integer('size');
            $table->integer('stargazers_count');
            $table->integer('watchers_count');
            $table->string('language');
            $table->text('has_issues');
            $table->text('has_projects');
            $table->json('permissions');
            $table->text('license')->nullable();
            $table->text('repo_created_at');
            $table->text('repo_updated_at');
            $table->text('repo_pushed_at');
            $table->string('default_branch');
            $table->json('owner_details');
            $table->text('node_id');
            $table->text('repo_id');
            $table->text('html_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repos');
    }
};
