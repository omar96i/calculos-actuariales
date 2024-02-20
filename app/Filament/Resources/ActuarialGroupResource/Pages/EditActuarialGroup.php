<?php

namespace App\Filament\Resources\ActuarialGroupResource\Pages;

use App\Filament\Resources\ActuarialGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActuarialGroup extends EditRecord
{
    protected static string $resource = ActuarialGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
