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
        Schema::create('list_content', function (Blueprint $table) {
            $table->integer('Content_Id')->primary()->autoincrement();
            $table->integer('Project_Id');
            $table->string('filename',20);
            $table->string('status',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_content');
    }
};
