<?php

namespace App\Filament\Resources\BuyersGuideResource\Pages;

use App\Filament\Resources\BuyersGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBuyersGuides extends ListRecords
{
    protected static string $resource = BuyersGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
