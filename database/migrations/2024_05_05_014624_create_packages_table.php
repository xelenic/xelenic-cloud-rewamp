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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->integer('credits');
            $table->integer('price');
            $table->string('discount');
            $table->string('final_price');
            $table->string('status')->default('active');
            $table->string('package_type')->default('credit');
            $table->string('package_image')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description');
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
