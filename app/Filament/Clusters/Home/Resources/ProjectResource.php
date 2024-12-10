<?php

namespace App\Filament\Clusters\Home\Resources;

use App\Models\Project;
use App\Filament\Clusters\Home\Resources\ProjectResource\Pages;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?int $navigationSort = 2;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Section::make('Project')
                ->description('Manage project details')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Project Name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('location')
                        ->label('Location')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('link')
                        ->label('Project Link')
                        ->url()
                        ->placeholder('https://example.com')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('price')
                        ->label('Price')
                        ->maxLength(255),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'Ongoing' => 'Ongoing',
                            'Completed' => 'Completed',
                            'Upcoming' => 'Upcoming',
                        ])
                        ->native(false),
                        Select::make('priority')
                        ->label('Priority')
                        ->options(array_combine(range(1, 10), range(1, 10)))
                        ->native(false),
                    Repeater::make('images')
                        ->label('Project Images')
                        ->schema([
                            FileUpload::make('image')
                                ->label('Image')
                                ->directory('project_images')
                                ->image()
                                ->required()
                                // ->maxSize(2048), // Optional: Limit size to 2MB
                        ])
                        ->columns(1)
                        ->collapsible()
                        
                    
                ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
           Tables\Columns\ImageColumn::make('images')
    ->label('Images')
    ->getStateUsing(fn($record) => 
        !empty($record->images) && isset($record->images[0]['image']) 
        ? asset('storage/' . $record->images[0]['image']) 
        : asset('storage/default-image.png')
    ),
            Tables\Columns\TextColumn::make('name')
                ->label('Project Name')
                ->searchable(),
            Tables\Columns\TextColumn::make('location')
                ->label('Location')
                ->searchable(),
            Tables\Columns\TextColumn::make('link')
                ->label('Link')
                ->url(fn ($record) => $record->link) // Make it clickable
                ->openUrlInNewTab(),
            Tables\Columns\TextColumn::make('price')
                ->label('Price')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->label('Updated At')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
