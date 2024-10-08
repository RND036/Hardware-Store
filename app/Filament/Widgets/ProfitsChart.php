<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ProfitsChart extends ChartWidget
{
    protected static ?int $sort =4;
    protected static ?string $heading = 'Profits Overview';
    protected int | string | array $columnSpan ='full';

    protected function getData(): array
    {
        return [
            'datasets' =>[
                [
                'label' => 'Month',
                'data' =>[15000,400000,550000,34000,480000,120000],
                'borderColor' => 'orange',
                ]
                ],
                'labels'=>['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                'borderColor' => 'rgb(75, 192, 192)',
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
