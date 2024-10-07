<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BuyersGuideResource\Pages;
use App\Filament\Resources\BuyersGuideResource\RelationManagers;
use App\Models\BuyersGuide;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BuyersGuideResource extends Resource
{
    protected static ?string $model = BuyersGuide::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->description('')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(10)
                            ->cols(20)
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('image')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('Years_of_experience')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('amenities')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('happy_clients')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('house_sold')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Section::make('Home Loan')
                    ->description('')
                    ->schema([
                        Forms\Components\TextInput::make('home_loan_title')
                            ->label('Home Loan Title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Repeater::make('home_loan_details')
                            ->label('Home Loan Details')
                            ->schema([
                                Forms\Components\TextInput::make('home_loan_heading')
                                    ->label('Heading')
                                    ->required()
                                    ->maxLength(255),

                                Repeater::make('home_loan_sub_heading')
                                    ->label('Sub Headings')
                                    ->schema([
                                        Forms\Components\TextInput::make('home_loan_sub_heading')
                                            ->label('Sub Heading')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),
                    ]),

                Section::make('Tax Benefits')
                    ->description('')
                    ->schema([
                        Repeater::make('tax_benefits_details')
                            ->schema([
                                Forms\Components\TextInput::make('title'),
                            ]),
                    ])
                    ->columns(1),
                Section::make('NRI Info')
                    ->description('')
                    ->schema([
                        Forms\Components\TextInput::make('nri_info_title')
                            ->label('NRI Info Title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Repeater::make('nri_info_details')
                            ->label(' NRI Info Details')
                            ->schema([
                                Forms\Components\TextInput::make('nri_info_heading')
                                    ->label('Heading')
                                    ->required()
                                    ->maxLength(255),

                                Repeater::make('nri_info_sub_heading')
                                    ->label('Sub Headings')
                                    ->schema([
                                        Forms\Components\TextInput::make('nri_info_sub_heading')
                                            ->label('Sub Heading')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Years_of_experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amenities')
                    ->searchable(),
                Tables\Columns\TextColumn::make('happy_clients')
                    ->searchable(),
                Tables\Columns\TextColumn::make('house_sold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_loan_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nri_info_title')
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
            'index' => Pages\ListBuyersGuides::route('/'),
            'create' => Pages\CreateBuyersGuide::route('/create'),
            'edit' => Pages\EditBuyersGuide::route('/{record}/edit'),
        ];
    }
}
