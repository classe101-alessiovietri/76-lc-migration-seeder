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
        Schema::table('houses', function (Blueprint $table) {
            // Aggiungo la colonna phone
            $table->string('phone', 16)->nullable()->after('description');
            // Aggiungo la colonna email
            $table->string('email', 16)->nullable()->after('phone');

            // Modifico la colonna title
            // $table->string('title', 3)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('houses', function (Blueprint $table) {
            // Modifico la colonna title
            // $table->string('title', 64)->change();

            if (Schema::hasColumn('houses', 'email')) {
                // Rimuovo la colonna email
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('houses', 'phone')) {
                // Rimuovo la colonna phone
                $table->dropColumn('phone');
            }
        });
    }
};
