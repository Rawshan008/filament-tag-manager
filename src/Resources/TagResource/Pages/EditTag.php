<?php

namespace Rawshan008\FilamentTagManager\Resources\TagResource\Pages;

use Rawshan008\FilamentTagManager\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTag extends EditRecord
{
  protected static string $resource = TagResource::class;

  protected function getHeaderActions(): array
  {
    return [
      Actions\DeleteAction::make(),
    ];
  }
}
