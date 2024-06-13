<?php

namespace App\Models;

use App\Models\User; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Streaming extends Model
{
    use HasFactory;
    public function movies(){
        return $this->hasMany(Movie::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
