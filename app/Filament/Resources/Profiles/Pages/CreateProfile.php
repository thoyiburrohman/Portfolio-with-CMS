<?php

namespace App\Filament\Resources\Profiles\Pages;

use App\Filament\Resources\Profiles\ProfileResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Icons\Heroicon;

class CreateProfile extends CreateRecord
{
    protected static string $resource = ProfileResource::class;

    protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Profile created';
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
