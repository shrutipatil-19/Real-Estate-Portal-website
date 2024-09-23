<?php

namespace App\Filament\Clusters\Home\Resources\AchievementResource\Pages;

use App\Filament\Clusters\Home\Resources\AchievementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAchievement extends CreateRecord
{
    protected static string $resource = AchievementResource::class;
}
