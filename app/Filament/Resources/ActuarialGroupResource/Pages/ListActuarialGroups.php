<?php

namespace App\Filament\Resources\ActuarialGroupResource\Pages;

use App\Filament\Resources\ActuarialGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActuarialGroups extends ListRecords
{
    protected static string $resource = ActuarialGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
