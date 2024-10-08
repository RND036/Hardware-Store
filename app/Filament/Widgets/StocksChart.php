<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class StocksChart extends ChartWidget
{
    protected static ?int $sort =3;
    protected static ?string $heading = 'Stocks Overview';
    protected static ?string $maxHeight = '230px';

    protected function getData(): array
    {
        return [
            'labels' => ['Hand Tools', 'Paints', 'Building Materials', 'Power Tools', 'Electrical Supplies', 'Plumbing Supplies'],
            'datasets' => [
                [
                    'data' => [0, 400, 550, 340, 480, 230, 370, 460, 580],
                    'backgroundColor' => [
                        'rgb(255, 99, 132)', 
                        'rgb(54, 162, 235)', 
                        'rgb(255, 205, 86)', 
                        'rgb(75, 192, 192)', 
                        'rgb(153, 102, 255)', 
                        'rgb(255, 159, 64)', 
                        'rgb(199, 199, 199)', 
                       
                    ],
                    'hoverOffset' => 4,
                ],
            ],
            
                
        ];
        
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
