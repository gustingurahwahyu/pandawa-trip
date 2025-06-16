<?php

namespace App\Filament\Widgets;

use App\Models\Destinasi;
use App\Models\PaketTravel;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DestinasiStatsOverview extends BaseWidget
{
    // Atur lebar widget menjadi setengah
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Paket', PaketTravel::count())
                ->description('Jumlah semua paket')
                ->descriptionIcon('heroicon-m-map-pin')
                ->color('primary')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),

            Stat::make('Total Destinasi', Destinasi::count())
                ->description('Jumlah semua destinasi')
                ->descriptionIcon('heroicon-m-map-pin')
                ->color('primary')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
        ];
    }
}
