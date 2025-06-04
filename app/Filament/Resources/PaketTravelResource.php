<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketTravelResource\Pages;
use App\Filament\Resources\PaketTravelResource\RelationManagers;
use App\Models\PaketTravel;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketTravelResource extends Resource
{
    protected static ?string $model = PaketTravel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\FileUpload::make('image')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\TextInput::make('capacity')->required(),
                Forms\Components\TextInput::make('duration')->required(),
                Forms\Components\TextInput::make('price')->required(),
                Forms\Components\TextInput::make('discount'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('capacity'),
                // Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('discount'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPaketTravel::route('/'),
            'create' => Pages\CreatePaketTravel::route('/create'),
            'edit' => Pages\EditPaketTravel::route('/{record}/edit'),
        ];
    }
}
