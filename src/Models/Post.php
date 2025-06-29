<?php

namespace Rawshan008\FilamentTagManager\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Rawshan008\FilamentTagManager\Models\Post;
use Rawshan008\FilamentTagManager\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'slug',
    'content',
    'image',
    'category_id',
    'is_published',
    'published_at',
  ];

  protected $casts = [
    'is_published' => 'boolean',
    'published_at' => 'datetime',
  ];

  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }

  public function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class, 'post_tag');
  }
}
