<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Product;
use App\Models\supplier;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatusOverview extends BaseWidget
{
    protected static ?string $pollingInterval='15s';
    protected static bool $isLazy=true;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customers',Customer::count())
            ->description('Increase In Customers')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7,3,4,5,6,5,3,4]),

            Stat::make('Total Products',Product::count())
            ->description('Total Products In Stocks')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger')
            ->chart([4,6,7,3,6,5,2,4]),
            Stat::make('Total Suppliers',supplier::count())
            ->description('Total Suppliers')
            ->descriptionIcon('heroicon-m-truck')
            ->color('info')
            ->chart([2,8,6,3,5,7,3,4]),
            Stat::make('Profit(Rs.)',Product::sum('profit'))
            ->description('Increase In Profit')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning')
            ->chart([2,5,8,6,3,5,4,6])


        ];
    }
}
