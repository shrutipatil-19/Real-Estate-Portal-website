<?php

namespace App\Filament\Clusters\Home\Resources\AboutUsResource\Pages;

use App\Filament\Clusters\Home\Resources\AboutUsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutUs extends EditRecord
{
    protected static string $resource = AboutUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
