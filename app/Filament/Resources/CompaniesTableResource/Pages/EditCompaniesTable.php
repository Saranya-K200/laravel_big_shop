<?php

namespace App\Filament\Resources\CompaniesTableResource\Pages;

use App\Filament\Resources\CompaniesTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompaniesTable extends EditRecord
{
    protected static string $resource = CompaniesTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
