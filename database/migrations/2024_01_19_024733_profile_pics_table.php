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
        Schema::create('profile_picsTable', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->reference('id')->on('users')->onDelete('cascading');
            $table->string('profile_pics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_picsTable');
    }
};
