<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'stack' => 'array',
        'blocks' => 'array',
        'links' => 'array',
        'featured' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('hero')
            ->singleFile(); 

        $this->addMediaCollection('content');
    }

    public function registerMediaConversions(\Spatie\MediaLibrary\MediaCollections\Models\Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->format('webp')
            ->quality(80)
            ->withResponsiveImages();

        $this->addMediaConversion('avif_opt')
            ->format('avif')
            ->quality(80)
            ->withResponsiveImages();
    }
}
