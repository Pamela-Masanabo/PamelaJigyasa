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
            
            $table->id();
            $table->string('name');
            $table->text('description'); 
            $table->enum('status', ['active', 'completed', 'in-progress'])->default('active');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('freelancer_id')->nullable();
            $table->timestamps();
    
            // Foreign key constraints
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('freelancer_id')->references('id')->on('users')->onDelete('set null');
        
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
