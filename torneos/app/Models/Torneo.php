<?php

namespace App\Models;

use App\Models\User;
use App\Models\Juego;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Torneo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fechaIncio',
        'premio',
        'premio2',
        'maxParticipantes'
    ];
    public function juego(): BelongsTo
    {
        return $this->belongsTo(Juego::class);  //Uno a muchos (inversa)
    }
    public function inscritos(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('nivel');
    }
}
