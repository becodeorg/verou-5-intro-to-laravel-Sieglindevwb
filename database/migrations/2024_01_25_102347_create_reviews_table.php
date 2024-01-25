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
        Schema::create('reviews', function (Blueprint $table) {
              $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('firstName');
        $table->string('lastName');
        $table->string('userName');
        $table->string('emailAdress');
        $table->string('subjectSelect');
        $table->text('textereaInfo');
        $table->timestamps();

        // Foreign key relationship
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
