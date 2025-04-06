<?php

namespace App\Filament\Resources\PriceContentResource\Pages;

use App\Filament\Resources\PriceContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPriceContent extends EditRecord
{
    protected static string $resource = PriceContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
