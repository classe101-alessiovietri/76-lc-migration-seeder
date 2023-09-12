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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();               // id -> type = BIGINT AUTO_INCREMENT PRIMARY KEY
            /*
                Dietro le quinte, id() fa:
                $table->unsignedBigInteger('id')->autoIncrement();
                e poi applica la PRIMARY KEY
            */
            $table->string('title', 64);
            // $table->decimal('price', 11, 2)->unsigned();
            // OPPURE
            $table->unsignedDecimal('price', 11, 2);
            $table->year('built_year')->nullable();
            // $table->smallInteger('square_meters')->unsigned();
            // OPPURE
            $table->unsignedSmallInteger('square_meters');
            $table->boolean('furnished')->default(false);
            $table->text('description')->nullable();
            $table->string('address', 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
