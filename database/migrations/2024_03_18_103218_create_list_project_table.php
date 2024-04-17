<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('list_project', function (Blueprint $table) {
            $table->integer('Project_id')->autoIncrement();
            $table->string('Project_Name',100)->unique();
            $table->string('Description',500);
            $table->string('Type_Content')->nullable();
            $table->string('Type')->nullable();
            $table->string('filename')->nullable();
            $table->string('url')->nullable();
            $table->string('status',1)->nullable(); 
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
