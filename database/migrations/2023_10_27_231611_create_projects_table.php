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
        Schema::create('projects', function (Blueprint $table) {
            $table->string("title");
            $table->string("specialization");
            $table->string("details");
            $table->string("pic_upload")->nullable();
            $table->integer("cost");
            $table->enum("status" , ["open" , "inprocess" , "closed"]);
            $table->decimal("rate");
            $table->integer("duration");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
