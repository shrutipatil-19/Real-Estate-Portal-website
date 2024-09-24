<?php

namespace App\Filament\Clusters\Home\Resources\MediaResource\Pages;

use App\Filament\Clusters\Home\Resources\MediaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMedia extends CreateRecord
{
    protected static string $resource = MediaResource::class;
}
