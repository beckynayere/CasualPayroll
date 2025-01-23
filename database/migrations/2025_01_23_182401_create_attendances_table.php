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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('casual_id');
        $table->date('date');
        $table->string('shift');
        $table->time('clock_in_time')->nullable();
        $table->time('clock_out_time')->nullable();
        $table->decimal('worked_hours', 5, 2)->default(0); 
        $table->timestamps();
             // Foreign key constraint
        $table->foreign('casual_id')->references('id')->on('casuals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
