<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Tag $tag)
        {
            $tag->slug = $tag->slug ?? str($tag->name)->slug();
        });
    }
}
