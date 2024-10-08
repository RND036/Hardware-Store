<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Filament\Resources\SupplierResource\RelationManagers;
use App\Models\Supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupplierResource extends Resource
{
    protected static ?string $model = Supplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $recordTitleAttribute ='name';
    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')
                ->hint('Enter Valid Email')
                ->rules(['regex:/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,6}$/']) 
                ->email()
                ->required(),
                Forms\Components\TextInput::make('contact number')
                ->rules(['regex:/^[0-9]{10,15}$/']) 
                ->hint('Enter Valid Phone Number')
                
                ->required(),
                Forms\Components\TextInput::make('products')->required(),
                Forms\Components\TextInput::make('cost')
                ->numeric()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            Tables\Columns\TextColumn::make('cost')
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSupplier::route('/create'),
            'edit' => Pages\EditSupplier::route('/{record}/edit'),
        ];
    }
}
