<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PriceContent;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PriceContentResource\Pages;
use App\Filament\Resources\PriceContentResource\RelationManagers;

class PriceContentResource extends Resource
{
    protected static ?string $model = PriceContent::class;

    protected static ?string $label = 'Harga Content Placement';

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
                    ->label('Fitur')
                    ->getStateUsing(function ($record) {
                        return $record->fitur;
                    })
                    ->view('admin.columns.fitur-list'),
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
            'index' => Pages\ListPriceContents::route('/'),
            'create' => Pages\CreatePriceContent::route('/create'),
            'edit' => Pages\EditPriceContent::route('/{record}/edit'),
        ];
    }
}
