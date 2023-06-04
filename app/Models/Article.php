<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'preview',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Article $article)
        {
            $article->slug = $article->slug ?? str($article->title)->slug();
        });
    }

    
}
