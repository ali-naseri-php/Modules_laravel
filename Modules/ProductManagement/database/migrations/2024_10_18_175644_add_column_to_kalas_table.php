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
        Schema::table('kalas', function (Blueprint $table) {
            $table->string('name');
            $table->string('image1');
            $table->string('image2');
            $table->text('explanation');
            $table->unsignedInteger('price');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kalas', function (Blueprint $table) {

        });
    }
};
