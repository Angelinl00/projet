<?php

namespace App\Models;

use App\Models\User;
use App\Models\Matiere;
use App\Models\Typenote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function typenotes() {
        return $this->belongsTo(Typenote::class);
    }

    public function matieres() {
        return $this->belongsTo(Matiere::class);
    }
}
