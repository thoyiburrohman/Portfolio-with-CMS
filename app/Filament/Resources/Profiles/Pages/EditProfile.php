<?php

namespace App\Filament\Resources\Profiles\Pages;

use App\Filament\Resources\Profiles\ProfileResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Icons\Heroicon;

class EditProfile extends EditRecord
{
    protected static string $resource = ProfileResource::class;
    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('edit');
    // }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Profile updated';
    }

    protected function getFormActions(): array
    {
        return [
            $this->getSaveFormAction()
                ->label('Simpan')
                ->icon(Heroicon::CheckBadge),
            $this->getCancelFormAction()
                ->label('Batal')
                ->icon(Heroicon::ArrowUturnLeft),
        ];
    }
}
