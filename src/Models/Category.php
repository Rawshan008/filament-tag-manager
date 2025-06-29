<?php

namespace Rawshan008\FilamentTagManager\Models;

use Illuminate\Database\Eloquent\Model;
use Rawshan008\FilamentTagManager\Models\Post;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
