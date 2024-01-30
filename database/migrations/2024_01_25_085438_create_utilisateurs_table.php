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
            Schema::create('utilisateurs', function (Blueprint $table) {
                $table->id();
                $table->string('type');
                $table->string('login')->unique();
                $table->string('password');
                $table->timestamps(); // Cette ligne ajoute les colonnes created_at et updated_at
            });
        }
        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
