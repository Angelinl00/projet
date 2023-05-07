<?php

namespace App\Models;

use App\Models\User;
use App\Models\Modepaiement;
use App\Models\TypePaiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'justificatif'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function type_paiements(){
        return $this->belongsTo(TypePaiement::class);
    }

    public function modepaiements(){
        return $this->belongsTo(Modepaiement::class);
    }
}
