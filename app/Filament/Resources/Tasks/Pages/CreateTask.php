<?php

namespace App\Filament\Resources\Tasks\Pages;

use App\Filament\Resources\Tasks\TaskResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Icons\Heroicon;

class CreateTask extends CreateRecord
{
    protected static string $resource = TaskResource::class;


    protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Task created';
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()
                ->label('Simpan')
                ->icon(Heroicon::CheckBadge),
            $this->getCancelFormAction()
                ->label('Batal')
                ->icon(Heroicon::ArrowUturnLeft),
        ];
    }
}
