<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Models\Country;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CountryResource extends Resource
{
    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    //Group
    protected static ?string $navigationGroup = 'Country';
    //
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Region')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Capital')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Official_language')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Area')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Currency')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Name'),
                Tables\Columns\TextColumn::make('Region'),
                Tables\Columns\TextColumn::make('Capital'),
                Tables\Columns\TextColumn::make('Official_language'),
                Tables\Columns\TextColumn::make('Area'),
                Tables\Columns\TextColumn::make('Currency'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                //Delete
                Tables\Actions\DeleteAction::make()
                //
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCountries::route('/'),
            'create' => Pages\CreateCountry::route('/create'),
            'view' => Pages\ViewCountry::route('/{record}'),
            'edit' => Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
