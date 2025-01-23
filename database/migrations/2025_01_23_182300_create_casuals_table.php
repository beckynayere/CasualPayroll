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
        Schema::create('casuals', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_number')->unique();
            $table->string('casual_code')->unique();
            $table->string('branch');
            $table->string('phone_number');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('department');
            $table->decimal('rate_per_day', 10, 2);
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casuals');
    }
};
