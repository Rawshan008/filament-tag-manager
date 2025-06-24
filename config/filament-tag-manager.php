<?php

use Rawshan008\FilamentTagManager\Models\Tag;

return [
  'tag_model' => Tag::class,

  'navigation' => [
    'group' => 'Content Management',
    'sort' => 2,
    'icon' => 'heroicon-o-tag',
  ],

  'features' => [
    'soft_deletes' => true,
    'auto_slug' => true,
  ],

  'table' => [
    'default_sort' => 'created_at',
    'default_sort_direction' => 'desc',
    'records_per_page' => 25,
  ],
];
