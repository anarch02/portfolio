<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'image',
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

    /**
     * The image that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'images_article', 'article_id', 'image_id');
    }

    /**
     * The image that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tags_article', 'article_id', 'tag_id');
    }
}
