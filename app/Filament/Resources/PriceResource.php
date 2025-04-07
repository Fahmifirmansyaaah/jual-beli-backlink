<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Price;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use App\Filament\Resources\PriceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PriceResource\RelationManagers;

class PriceResource extends Resource
{
    protected static ?string $model = Price::class;

    protected static ?string $label = 'Harga Backlink';

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Harga')
                    ->required(),
                TextInput::make('harga')
                    ->numeric()
                    ->required(),
                Repeater::make('fitur')
                    ->label('Daftar Fitur')
                    ->schema([
                        TextInput::make('value')
                            ->label('Teks Fitur')
                            ->placeholder('Contoh: 2 Backlink / -Artikel')
                            ->required(),
                    ])
                    ->default([])
                    ->addActionLabel('Tambah Fitur')
                    ->columns(1)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('harga'),
                TextColumn::make('fitur')
                    ->label('Fitur')
                    ->html(),
                ViewColumn::make('fitur')
                    ->view('admin.columns.fitur-list')
                    ->getStateUsing(fn($record) => $record->fitur),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPrices::route('/'),
            'create' => Pages\CreatePrice::route('/create'),
            'edit' => Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
