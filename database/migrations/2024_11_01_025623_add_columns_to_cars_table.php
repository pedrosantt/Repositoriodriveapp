<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    public function up()
    {
    Schema::table('cars', function (Blueprint $table) {
        $table->string('make');
        $table->string('model');
        $table->integer('year');
        $table->string('license_plate');
        $table->unsignedBigInteger('user_id')->nullable();
        });
    }};