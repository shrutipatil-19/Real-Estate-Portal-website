<?php

namespace App\Filament\Resources\BuyersGuideResource\Pages;

use App\Filament\Resources\BuyersGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuyersGuide extends EditRecord
{
    protected static string $resource = BuyersGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
