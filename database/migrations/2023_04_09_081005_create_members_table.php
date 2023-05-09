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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->text('session')->nullable();
            $table->text('occopetation')->nullable();
            $table->text('trainee_Name')->nullable();
            $table->text('designation')->nullable();
            $table->text('name')->nullable();
            $table->string('address')->nullable();
            $table->text('country')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('mobile')->nullable();
            $table->text('type')->nullable();
            $table->string('reg')->nullable();
            $table->text('assessment')->nullable();
            $table->text('income')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
