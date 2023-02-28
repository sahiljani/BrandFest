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
        Schema::create('generated_poster', function (Blueprint $table) {
            $table->id();
            $table->string('poster_path');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('poster_id');
            $table->boolean('email_sent')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('company_id')->references('id')->on('company');
            $table->foreign('poster_id')->references('id')->on('poster');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generated_poster');
    }
};
