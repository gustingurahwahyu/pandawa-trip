<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class PaketChart extends ChartWidget
{
    protected static ?string $heading = 'Paket Travel';

    protected int | string |array $columnSpan = 'full';
    protected function getData(): array
    {
        // Ambil semua paket beserta jumlah destinasi
        $pakets = \App\Models\PaketTravel::withCount('destinasis')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Destinasi',
                    'data' => $pakets->pluck('destinasis_count')->toArray(),
                    'borderColor' => '#FF4900',
                    'backgroundColor' => 'rgba(249, 115, 22, 0.2)',
                ],
            ],
            'labels' => $pakets->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                        'precision' => 0
                    ],
                ],
            ],
        ];
    }
}
