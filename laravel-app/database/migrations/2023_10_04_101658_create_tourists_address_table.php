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
        Schema::table('tourists_address', function (Blueprint $table) {
            $table->after('id',function (Blueprint $table) {
                $table->unsignedBigInteger('tourist_id'); 
                $table->foreign('tourist_id')->references('id')->on('tourists');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourists_address');
    }
};
