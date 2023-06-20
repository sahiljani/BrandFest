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
        Schema::table('generated_poster', function (Blueprint $table) {
            //
            $table->dropForeign(['poster_id']);
            $table->foreign('poster_id')
                ->references('id')->on('poster')
                ->onDelete('cascade')
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('generated_poster', function (Blueprint $table) {
            //
        });
    }
};
