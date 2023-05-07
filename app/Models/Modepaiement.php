<?php

namespace App\Models;

use App\Models\Paiement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modepaiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function paiements(){
        return $this->hasMany(Paiement::class);
    }
}
