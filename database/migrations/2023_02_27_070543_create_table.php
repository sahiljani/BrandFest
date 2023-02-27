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
        Schema::create('poster', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('image');
            $table->text('description');
            $table->text('logo_type');
            $table->text('logo_details');
            $table->text('phone_details');            
            $table->text('email_details');
            $table->text('company_details');
            $table->text('address_details');
            $table->boolean('generated4all')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Poster');
    }
};
