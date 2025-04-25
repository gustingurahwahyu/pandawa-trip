<?php

namespace App\Filament\Resources\PaketTravelResource\Pages;

use App\Filament\Resources\PaketTravelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaketTravel extends ListRecords
{
    protected static string $resource = PaketTravelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
