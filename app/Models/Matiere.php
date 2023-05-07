<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'coef'
    ];

    public function notes() {
        return $this->hasMany(Note::class);
    }

    public function classes() {
        return $this->belongsToMany(Classe::class);
    }
}
