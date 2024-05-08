<?php

namespace App\Filament\Resources\SucursalResource\Pages;

use App\Filament\Resources\SucursalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSucursals extends ListRecords
{
    protected static string $resource = SucursalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
