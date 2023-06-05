<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'url',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (\App\Models\Project $project)
        {
            $project->slug = $project->slug ?? str($project->name)->slug();
        });
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'images_project', 'project_id', 'image_id');
    }

     /**
     * The image that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tags_project', 'project_id', 'tag_id');
    }
}
