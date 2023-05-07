<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typenote extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

    public function notes() {
        return $this->hasMany(Note::class);
    }
}
