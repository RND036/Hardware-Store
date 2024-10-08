<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $recordTitleAttribute = 'name';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('product')->required(),
                Forms\Components\TextInput::make('name')->required(),
                Select::make('supplier_id')
                    ->label('Supplier')
                    ->options(supplier::all()->pluck('name', 'id')->toArray()) // Display suppliers' names
                    ->required(),
                Forms\Components\Select::make('category')
                ->options([
                    'Hand Tools' => 'Hand Tools',
                    'PowerTools' => 'Power Tools',
                    'Electrical Items' => 'Electrical Items',
                    'Building Materials' => 'Building Materials',
                    'Paints'=>'Paints',
                    'Plumbing Items'=>'Plumbing Items',
                ])
                ->required(),
                Forms\Components\TextInput::make('quantity')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('stocks')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('buying price')
                ->numeric()
                ->reactive()
                ->required(),
                Forms\Components\TextInput::make('selling price')
                ->numeric()
                ->reactive()
                ->required(),
                Forms\Components\TextInput::make('profit')
                ->numeric()
                ->afterStateUpdated(function (callable $get, callable $set) {
                    // Automatically calculate profit when selling or buying price changes
                    $buyingPrice = $get('buying price');
                    $sellingPrice = $get('selling price');
                    if ($buyingPrice && $sellingPrice) {
                        $profit = $sellingPrice - $buyingPrice;
                        $set('profit', $profit);  // Set the calculated profit
                    }
                })
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('product')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('category')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('stocks')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('buying price')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('selling price')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('profit')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
