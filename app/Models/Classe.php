<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Groupe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'effectif',
        'moyenne'
    ];

    public function groupes() {
        return $this->belongsTo(Groupe::class);
    }

    public function levels(){
        return $this->belongsTo(Level::class);
    }
}