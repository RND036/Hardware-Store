<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ProductsChart extends ChartWidget
{
    protected static ?int $sort =3;
    protected static ?string $heading = 'Sales Overview';

    protected function getData(): array
    {
        return [
            
            'datasets' =>[
                [
                'label' => 'Month',
                'data' =>[0,400,550,340,480,230,370,460,580]
                ]
                ],
                'labels'=>['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct']
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
