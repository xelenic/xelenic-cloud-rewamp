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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('icon')->nullable();
            $table->float('price');
            $table->text('description')->nullable();
            $table->text('short_description');
            $table->enum('status',['active','inactive']);
            $table->string('cover_photo')->nullable();
            $table->string('category_id');
            $table->boolean('is_available_api');
            $table->boolean('showing_frontend');
            $table->string('product_type')->comment('sass_tool,in-build_application,self_hosted_application');
            $table->string('payment_type')->comment('payment_required,free,paid_item');
            $table->json('payment_rules')->nullable();
            $table->json('faq')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
