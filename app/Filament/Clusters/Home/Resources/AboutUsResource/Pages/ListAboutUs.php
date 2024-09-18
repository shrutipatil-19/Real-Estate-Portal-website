<?php

namespace App\Filament\Clusters\Home\Resources\AboutUsResource\Pages;

use App\Filament\Clusters\Home\Resources\AboutUsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUs extends ListRecords
{
    protected static string $resource = AboutUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
