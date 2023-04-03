<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];


    /**
     * to get movie that related to genre
     */
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
}
