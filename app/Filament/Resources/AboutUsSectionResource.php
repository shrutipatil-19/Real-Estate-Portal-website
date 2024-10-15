<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsSectionResource\Pages;
use App\Filament\Resources\AboutUsSectionResource\RelationManagers;
use App\Filament\Resources\MeetOurTeamResource\RelationManagers\MeetOurTeamRelationManager;
use App\Models\AboutUsSection;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutUsSectionResource extends Resource
{
    protected static ?string $model = AboutUsSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $pluralModelLabel = 'About Us';

    protected static string $relationship = 'meetOurTeam';
    protected static ?int $navigationSort = 2;

    // protected static ?string $navigationLabel = 'About Us';
    protected static ?string $modelLabel = 'About Us';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Section::make('Overview')
                    ->description('')
                    ->schema([
                        Forms\Components\TextInput::make('overview_title')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('overview_description')
                            ->label('Overview description 1')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('overview_description_2')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Our Mission')
                    ->description('')
                    ->schema([

                        Forms\Components\FileUpload::make('our_mission_image')
                        ->directory('our_mission_image')
                            ->required()
                            ->multiple()
                            ->image()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('our_mission_description')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Our Vision')
                    ->description('')
                    ->schema([
                        Forms\Components\Textarea::make('our_vision_description')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('our_vision_image')
                        ->directory('our_vision_image')
                            ->required()
                            ->image()
                            ->multiple()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Parallax Effect')
                    ->description('')
                    ->schema([
                        Forms\Components\FileUpload::make('parallax_effect_image')
                        ->directory('about_us_parallax_effect_image')
                            ->image()
                            ->required(),
                        Forms\Components\TextInput::make('parallax_effect_heading')
                            ->required()
                            ->maxLength(255),
                    ]),
                Section::make('Meet Our Team')
                    ->description('')
                    ->schema([
                        Forms\Components\TextInput::make('meet_our_team_heading')
                            ->required(),
                        Repeater::make('meet_our_team_details')
                            ->label('Meet Our Team create')
                            ->schema([
                                Forms\Components\FileUpload::make('images')
                                ->directory('meet_our_team_details_image')
                                    ->image()
                                    ->required(),
                                Forms\Components\TextInput::make('name')
                                    ->required(),
                                Forms\Components\TextInput::make('designation')
                                    ->required(),
                            ]),
                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('overview_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('parallax_effect_image'),
                Tables\Columns\TextColumn::make('parallax_effect_heading')
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUsSections::route('/'),
            'create' => Pages\CreateAboutUsSection::route('/create'),
            'edit' => Pages\EditAboutUsSection::route('/{record}/edit'),
        ];
    }
}
