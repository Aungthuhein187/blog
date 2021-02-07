<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Article extends Model
{
    use HasFactory;

    public function category(): Relations\BelongsTo
    {
        return $this->belongsTo("App\Models\Category");
    }

    public function comments(): Relations\HasMany
    {
        return $this->hasMany("App\Models\Comment");
    }
}
