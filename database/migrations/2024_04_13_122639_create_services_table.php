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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('short_description');
            $table->text('slug');
            $table->enum('status',[
                'active','inactive'
            ]);
            $table->text('meta')->nullable();
            $table->text('cover_image');
            $table->text('icon')->nullable();
            $table->string('product_type')->comment('sass_tool,in-build_application,self_hosted_application');
            $table->string('payment_type')->comment('payment_required,free,paid_item');
            $table->json('payment_rules')->nullable();
            $table->json('faq')->nullable();
            $table->string('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
