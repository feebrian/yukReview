<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * to get related genre
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
