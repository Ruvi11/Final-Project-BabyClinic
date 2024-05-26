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
        Schema::create('babies', function (Blueprint $table) {
            $table->bigIncrements('baby_id');
            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('clinic_id');
            $table->string('b_name');
            $table->string('address');
            $table->string('b_age');
            $table->enum('gender', ['male', 'female']);
            $table->string('born_weight');
            $table->date('bdy');
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('babies');
    }
};
