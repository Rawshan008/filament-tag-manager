<?php

namespace Rawshan008\FilamentTagManager\Resources;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Rawshan008\FilamentTagManager\Models\Tag;
use Rawshan008\FilamentTagManager\Resources\TagResource\Pages;

class TagResource extends Resource
{
  protected static ?string $model = Tag::class;

  protected static ?string $navigationIcon = 'heroicon-o-tag';

  protected static ?string $navigationGroup = 'Content Management';

  protected static ?int $navigationSort = 2;

  protected static ?string $recordTitleAttribute = 'name';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Section::make('Tag Details')
          ->schema([
            Forms\Components\TextInput::make('name')
              ->label('Name')
              ->required()
              ->maxLength(255)
              ->unique(ignoreRecord: true)
          ]),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('id')
          ->label('ID')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('name')
          ->label('Name')
          ->sortable()
          ->searchable()
          ->toggleable(),
        Tables\Columns\TextColumn::make('created_at')
          ->label('Created At')
          ->dateTime()
          ->sortable(),
        Tables\Columns\TextColumn::make('updated_at')
          ->label('Updated At')
          ->dateTime()
          ->sortable(),
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
        Tables\Actions\ViewAction::make(),

      ])
      ->bulkActions([
        Tables\Actions\BulkActionGroup::make([
          Tables\Actions\DeleteBulkAction::make(),
        ]),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListTags::route('/'),
      'create' => Pages\CreateTag::route('/create'),
      'edit' => Pages\EditTag::route('/{record}/edit'),
    ];
  }



  public static function getNavigationBadge(): ?string
  {
    return static::getModel()::count();
  }

  public static function getNavigationBadgeColor(): ?string
  {
    $count = static::getModel()::count();

    if ($count === 0) {
      return 'gray';
    } elseif ($count < 10) {
      return 'success';
    } elseif ($count < 50) {
      return 'warning';
    } else {
      return 'danger';
    }
  }
}
