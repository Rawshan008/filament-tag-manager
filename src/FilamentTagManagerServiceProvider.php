<?php

namespace Rawshan008\FilamentTagManager;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class FilamentTagManagerServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/filament-tag-manager.php', 'filament-tag-manager');
  }

  public function boot(): void
  {
    $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

    $this->publishes([
      __DIR__ . '/../config/filament-tag-manager.php' => config_path('filament-tag-manager.php'),
    ], 'filament-tag-manager-config');

    $this->publishes([
      __DIR__ . '/../database/migrations/' => database_path('migrations'),
    ], 'filament-tag-manager-migrations');
  }
}
