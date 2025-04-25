<?php

namespace App\Filament\Resources\PaketTravelResource\Pages;

use App\Filament\Resources\PaketTravelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaketTravel extends EditRecord
{
    protected static string $resource = PaketTravelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
