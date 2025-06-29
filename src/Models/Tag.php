<?php

namespace Rawshan008\FilamentTagManager\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Rawshan008\FilamentTagManager\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
  ];

  public function posts(): BelongsToMany
  {
    return $this->belongsToMany(Post::class);
  }
}
