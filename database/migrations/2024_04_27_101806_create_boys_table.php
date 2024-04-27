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
        Schema::create('boys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add other fields as needed
            $table->unsignedBigInteger('girl_id'); // Foreign key
            $table->timestamps();
        
            // Define foreign key constraint
            $table->foreign('girl_id')->references('id')->on('girls')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boys');
    }
};
