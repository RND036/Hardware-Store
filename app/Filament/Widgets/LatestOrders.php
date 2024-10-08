<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    protected static ?int $sort =5;
    protected int | string | array $columnSpan ='full';
    
    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at','desc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('email')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('contact number')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('products')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('payment method')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('cost')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('address')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('created_at')
            ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('shipping status')
            ->sortable()
                ->searchable()
                ->toggleable(),
            ]);
    }
}
