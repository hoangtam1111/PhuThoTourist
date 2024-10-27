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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->boolean('state');
            $table->string('location');
            $table->integer('quantity')->default(1);
            $table->string('workplace');
            $table->text('address');
            $table->text('job_description');
            $table->date('date');
            $table->string('working_time');
            $table->string('interest');
            $table->string('requirement');
            $table->string('age');
            $table->string('level');
            $table->string('file');
            $table->foreignId('field_id')->constrained()->cascadeOnDelete();
            $table->foreignId('type_work_id')->constrained()->cascadeOnDelete();
            $table->foreignId('working_place_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruiments');
    }
};
