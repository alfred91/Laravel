<?php

namespace App\Models;

use App\Models\Torneo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Juego extends Model
{
    use HasFactory;

    public function torneos(): HasMany
    {
        return $this->hasMany(Torneo::class);
    }
    public function torneoPremioMayor(): HasOne
    {
        return $this->torneos()->one()->ofMany('premio1', 'max');
    }
}
