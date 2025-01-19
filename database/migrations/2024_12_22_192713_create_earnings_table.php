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
        Schema::create('earnings', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('freelancer_id');
        $table->decimal('amount', 10, 2);
        $table->timestamp('date')->useCurrent();
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('freelancer_id')->references('id')->on('users')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earnings');
    }
};
