<?php

use App\Models\User;
use App\Models\Modepaiement;
use App\Models\TypePaiement;
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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->float('montant');
            $table->text('justificatif')->nullable();
            $table->timestamps();

            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TypePaiement::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Modepaiement::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
