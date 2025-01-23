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
        Schema::create('compensation', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('casual_id'); 
            $table->date('date_range_start'); 
            $table->date('date_range_end'); 
            $table->integer('days_worked'); 
            $table->decimal('rate_per_day', 10, 2); 
            $table->decimal('total_compensation', 10, 2); 
            $table->enum('status', ['Pending', 'Processed'])->default('Pending'); 
            
            // Foreign key constraint
            $table->foreign('casual_id')->references('id')->on('casuals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compensation');
    }
};
