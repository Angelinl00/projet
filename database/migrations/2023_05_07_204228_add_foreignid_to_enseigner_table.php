<?php

use App\Models\Classe;
use App\Models\Matiere;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('enseigner', function (Blueprint $table) {
            $table->foreignIdFor(Classe::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Matiere::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enseigner', function (Blueprint $table) {
            $table->dropForeignIdFor(Classe::class);
            $table->dropForeignIdFor(Matiere::class);
        });
    }
};
