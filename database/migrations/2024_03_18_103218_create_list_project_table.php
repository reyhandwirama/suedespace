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
        Schema::create('list_project', function (Blueprint $table) {
            $table->integer('Project_id')->primary();
            $table->string('Project_Name',100);
            $table->string('Description',500);
            $table->string('Type_Content',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_project');
    }
};
