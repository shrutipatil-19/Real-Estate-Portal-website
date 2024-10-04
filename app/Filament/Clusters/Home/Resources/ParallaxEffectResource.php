<?php

namespace App\Filament\Clusters\Home\Resources;

use App\Filament\Clusters\Home;
use App\Filament\Clusters\Home\Resources\ParallaxEffectResource\Pages;
use App\Filament\Clusters\Home\Resources\ParallaxEffectResource\RelationManagers;
use App\Models\ParallaxEffect;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParallaxEffectResource extends Resource
{
    protected static ?string $model = ParallaxEffect::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    protected static ?string $cluster = Home::class;

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Section::make('')
                    ->description('')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->required(),
                        Forms\Components\Textarea::make('heading')
                            ->required(),
                        Forms\Components\TextInput::make('sub_heading')
                            ->required(),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('heading')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_heading')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListParallaxEffects::route('/'),
            'create' => Pages\CreateParallaxEffect::route('/create'),
            'edit' => Pages\EditParallaxEffect::route('/{record}/edit'),
        ];
    }
}
