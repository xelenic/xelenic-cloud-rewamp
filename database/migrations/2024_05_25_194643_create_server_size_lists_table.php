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
        Schema::create('server_size_lists', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('memory')->comment('in MB');
            $table->text('disk');
            $table->text('transfer');
            $table->float('price_monthly');
            $table->float('price_hourly');
            $table->json('regions');
            $table->text('vcpus');
            $table->text('description');
            $table->time('synced_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_size_lists');
    }
};
