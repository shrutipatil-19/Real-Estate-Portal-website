<?php

namespace App\Filament\Clusters\Home\Resources\ParallaxEffectResource\Pages;

use App\Filament\Clusters\Home\Resources\ParallaxEffectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParallaxEffects extends ListRecords
{
    protected static string $resource = ParallaxEffectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
