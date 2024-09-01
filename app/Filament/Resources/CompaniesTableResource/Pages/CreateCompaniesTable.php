<?php

namespace App\Filament\Resources\CompaniesTableResource\Pages;

use App\Filament\Resources\CompaniesTableResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompaniesTable extends CreateRecord
{
    protected static string $resource = CompaniesTableResource::class;
}
