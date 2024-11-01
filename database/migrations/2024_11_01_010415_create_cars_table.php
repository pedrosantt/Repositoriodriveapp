<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_cars_table.php
public function up()
{
    Schema::create('cars', function (Blueprint $table) {
        $table->id();
        $table->string('make');
        $table->string('model');
        $table->integer('year');
        $table->string('license_plate');
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Chave estrangeira
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
