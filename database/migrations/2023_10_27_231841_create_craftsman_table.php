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
        Schema::create('craftsman', function (Blueprint $table) {
            $table->id(); 
            $table->string('Fname'); 
            $table->string('Lname'); 
            $table->string('Email')->unique(); 
            $table->string('Password'); 
            $table->string('Img_profile')->nullable(); 
            $table->string('Phone')->nullable(); 
            $table->string('Scan_Imgid')->nullable(); 
            $table->text('Address')->nullable(); 
            $table->decimal('rate', 8, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('craftsman');
    }
};
