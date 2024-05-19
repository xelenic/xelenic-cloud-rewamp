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
        Schema::table('payment_histories', function (Blueprint $table) {
            $table->text('payment_details')->nullable();
            $table->float('amount')->nullable();
            $table->float('before_amount')->nullable();
            $table->string('status')->nullable();
            $table->float('discount')->nullable();
            $table->boolean('is_package');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
