<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciutat extends Model
{
    use HasFactory;

    public function casals(): HasMany
    {
        return $this->hasMany(Casal::class);
    }
}
