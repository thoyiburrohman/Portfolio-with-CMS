<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        FileUpload::make('image_1')
                            ->label('Gambar Profil')
                            ->directory('profiles')
                            ->visibility('public')
                            ->image()
                            ->avatar()->alignCenter(),
                        FileUpload::make('image_2')
                            ->label('Gambar Profil')
                            ->directory('profiles')
                            ->visibility('public')
                            ->maxSize(5024)
                            ->image()
                            ->avatar()
                            ->alignCenter(),

                    ]),
                Grid::make()
                    ->columnSpanFull()
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('phone')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                    ]),
                TextInput::make('address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('motto'),
                TextInput::make('short_bio')
                    ->required(),
                RichEditor::make('long_bio')
                    ->required()
                    ->columnSpanFull(),
                Grid::make()
                    ->columnSpanFull()
                    ->columns(3)
                    ->schema([
                        TextInput::make('instagram_url'),
                        TextInput::make('linkedin_url'),
                        TextInput::make('github_url'),
                    ]),
                TextInput::make('facebook_url'),
                TextInput::make('youtube_url'),

                Toggle::make('is_available')
                    ->label('Available')
                    ->onIcon(Heroicon::CheckCircle)
                    ->offIcon(Heroicon::XCircle)
                    ->inline(false)
                    ->required(),
            ]);
    }
}
