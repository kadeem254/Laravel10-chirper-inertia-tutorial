<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirps extends Model
{
    use HasFactory;

    // enable mass assignment for safe attributes.
    protected $fillable = [
        'message'
    ];

    /**
     * Specifies the specific user the chirp belongs to, in essence 1 chirp belongs
     * to only one user.
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
