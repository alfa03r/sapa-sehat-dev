<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'title', 'slug', 'thumbnail', 
        'content', 'event_date', 'location', 'price', 
        'status', 'is_featured'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
}
