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
        Schema::create('apply_works', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->binary('sex');
            $table->date('dob');
            $table->text('place_of_birth');
            $table->string('current_residence');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('level');
            $table->string('file_cv');
            $table->string('long_day_work');
            $table->string('overtime');
            $table->string('previous_workplace');
            $table->string('experience');
            $table->foreignId('recruiment_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_works');
    }
};