<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscountTypeResource\Pages;
use App\Filament\Resources\DiscountTypeResource\RelationManagers;
use App\Models\DiscountType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Enums\DiscountTypeStatus;

class DiscountTypeResource extends Resource
{
    protected static ?string $model = DiscountType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('start_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('end_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('type')
                    ->options(DiscountTypeStatus::class)

                    ->default(DiscountTypeStatus::COUPON_CODE),
                Forms\Components\Toggle::make('never_expired')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('start_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state){
                        DiscountTypeStatus::COUPON_CODE->value => 'success',
                        DiscountTypeStatus::PROMOTION->value => 'danger', 
                    }),
                Tables\Columns\IconColumn::make('never_expired')
                    ->boolean(),
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
            'index' => Pages\ListDiscountTypes::route('/'),
            'create' => Pages\CreateDiscountType::route('/create'),
            'edit' => Pages\EditDiscountType::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
