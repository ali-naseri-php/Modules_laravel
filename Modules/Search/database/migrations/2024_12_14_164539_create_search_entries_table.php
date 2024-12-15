<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('search_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('searchable_id');
            $table->string('searchable_type');
            $table->string('title');
            $table->timestamps();

            $table->index(['searchable_id', 'searchable_type'], 'searchable_index');
            $table->index('title', 'title_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_entries');
    }
};
