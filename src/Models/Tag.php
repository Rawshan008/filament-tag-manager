<?php

namespace Rawshan008\FilamentTagManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
  ];
}
