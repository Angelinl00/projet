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
        Schema::table('paiements', function (Blueprint $table) {
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
        Schema::table('paiements', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(TypePaiement::class);
            $table->dropForeignIdFor(Modepaiement::class);
        });
    }
};
