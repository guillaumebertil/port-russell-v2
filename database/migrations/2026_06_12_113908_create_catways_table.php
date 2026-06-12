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
        Schema::create('catways', function (Blueprint $table) {
            $table->id();
            $table->integer('catwayNumber');
            $table->enum('catwayType', ['short', 'long']);
            $table->string('catwayState');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catways');
    }
};
