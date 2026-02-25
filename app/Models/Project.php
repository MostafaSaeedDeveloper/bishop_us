<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'client_name',
        'category',
        'description',
        'short_description',
        'featured_image',
        'status',
        'execution_date',
    ];

    protected function casts(): array
    {
        return [
            'execution_date' => 'date',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function primaryImageUrl(): ?string
    {
        $galleryImageUrl = $this->getFirstMediaUrl('gallery_images');
        if ($galleryImageUrl) {
            return $galleryImageUrl;
        }

        return $this->featuredImageUrl();
    }

    public function featuredImageUrl(): ?string
    {
        $mediaUrl = $this->getFirstMediaUrl('featured_image');
        if ($mediaUrl) {
            return $mediaUrl;
        }

        if (! $this->featured_image) {
            return null;
        }

        return Str::startsWith($this->featured_image, ['http://', 'https://', '//'])
            ? $this->featured_image
            : asset($this->featured_image);
    }

    public function galleryMedia(): MorphMany
    {
        return $this->media()->where('collection_name', 'gallery_images');
    }
}
