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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('department_id');
            $table->foreignId('division_id');
            $table->foreignId('position_id');
            $table->string('username')->unique();
            $table->string('fullname');
            $table->string('identificial_id');
            $table->string('alamat');
            $table->string('birth');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
