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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('national_code');
            $table->string('national_number');
            $table->string('date');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('gender');
            $table->string('education');
            $table->string('password');
            $table->string('image');
            $table->string('State');
            $table->string('city');
            $table->string('post_number');
            $table->string('Address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
