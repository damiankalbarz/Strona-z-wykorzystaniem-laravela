<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'own_name',
        'user_id'
    ];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
