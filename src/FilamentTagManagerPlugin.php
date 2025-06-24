<?php

namespace Rawshan008\FilamentTagManager;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Rawshan008\FilamentTagManager\Resources\TagResource;
use Rawshan008\FilamentTagManager\Resources\CategoryResource;


class FilamentTagManagerPlugin implements Plugin
{
  public function getId(): string
  {
    return 'filament-tag-manager';
  }

  public function register(Panel $panel): void
  {
    $panel->resources([
      TagResource::class,
      CategoryResource::class,
    ]);
  }

  public function boot(Panel $panel): void
  {
    //
  }

  public static function make(): static
  {
    return new static();
  }
}
