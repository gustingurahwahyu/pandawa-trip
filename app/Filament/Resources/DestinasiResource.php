<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinasiResource\Pages;
use App\Filament\Resources\DestinasiResource\RelationManagers;
use App\Models\Destinasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinasiResource extends Resource
{
    protected static ?string $model = Destinasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Select::make('paket_travel_id')
                    ->required()
                    ->label('Paket Travel')
                    ->relationship('paketTravel', 'name'),
                Forms\Components\FileUpload::make('image')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\TextInput::make('price')->required(),
                Forms\Components\TextInput::make('location')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                // Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('price')->searchable(),
                Tables\Columns\TextColumn::make('location'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDestinasis::route('/'),
            'create' => Pages\CreateDestinasi::route('/create'),
            'edit' => Pages\EditDestinasi::route('/{record}/edit'),
        ];
    }
}
