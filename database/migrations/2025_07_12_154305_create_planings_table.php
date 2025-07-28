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
        Schema::create('planings', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->enum('status' , ['todo','in_progres'  , 'done'])->default('todo');
            $table->foreignId('users_id')->constrained();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planings');
    }
};
