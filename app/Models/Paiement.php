<?php

namespace App\Models;

use App\Models\User;
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
}
