<?php

namespace App\Filament\Resources\Profiles;

use App\Filament\Resources\Profiles\Pages\CreateProfile;
use App\Filament\Resources\Profiles\Pages\EditProfile;
use App\Filament\Resources\Profiles\Pages\ListProfiles;
use App\Filament\Resources\Profiles\Schemas\ProfileForm;
use App\Filament\Resources\Profiles\Tables\ProfilesTable;
use App\Models\Profile;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use UnitEnum;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedUserCircle;

    protected static string | BackedEnum | null $activeNavigationIcon = Heroicon::UserCircle;

    protected static string | UnitEnum | null $navigationGroup = 'Settings';

    protected static ?string $recordTitleAttribute = 'Profile';

    public static function getRecord(): ?Profile
    {
        // Cari record dengan ID 1 (atau buat jika tidak ada, sesuai kebutuhan)
        return Profile::first() ?? Profile::create(['id' => 1]);
    }

    // Metode helper untuk mendapatkan URL Edit
    public static function getEditUrl(): string
    {
        // Pastikan kita menggunakan ID dari record tunggal yang kita ambil
        return static::getUrl('edit', ['record' => static::getRecord()->id]);
    }
    public static function getNavigationUrl(string $name = 'index', array $parameters = []): string
    {
        if ($name === 'index') {
            // Alihkan ke URL edit
            return static::getEditUrl();
        }

        // Panggil implementasi parent untuk rute lain (create, view, dll.)
        return parent::getUrl($name, $parameters);
    }

    public static function form(Schema $schema): Schema
    {
        return ProfileForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfilesTable::configure($table);
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
            'index' => ListProfiles::route('/'),
            // 'create' => CreateProfile::route('/create'),
            'edit' => EditProfile::route('/{record}/edit'),
        ];
    }
}
