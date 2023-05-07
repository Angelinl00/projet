<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function classes(){
        return $this->hasMany(Classe::class);
    }
}
