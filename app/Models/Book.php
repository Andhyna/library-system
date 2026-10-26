<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ['title', 'author', 'year', 'stock', 'category_id'];

}
