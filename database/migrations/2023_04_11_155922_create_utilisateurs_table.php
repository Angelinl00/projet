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
            $table->integer('matricule')->unique() ;
            $table->string('login') ;
            $table->integer('telephone') ;
            $table->string('mail') ;
            $table->string('password') ;
            $table->boolean('is_admin')->default(false) ;
            $table->boolean('is_enseignant')->default(false) ;
            $table->timestamps();
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
