<?php

namespace App\Filament\Clusters\Home\Resources\ParallaxEffectResource\Pages;

use App\Filament\Clusters\Home\Resources\ParallaxEffectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParallaxEffect extends EditRecord
{
    protected static string $resource = ParallaxEffectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
