<?php

namespace App\Filament\Resources\Profiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\IconSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('motto')
                    ->searchable(),
                TextColumn::make('short_bio')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                IconColumn::make('instagram_url')
                    ->label('Instagram')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->instagram_url),
                IconColumn::make('linkedin_url')
                    ->label('Linkedin')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->linkedin_url),
                IconColumn::make('github_url')
                    ->label('Github')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->github_url),
                IconColumn::make('facebook_url')
                    ->label('Facebook')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->facebook_url),
                IconColumn::make('youtube_url')
                    ->label('youtube')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->youtube_url),
                ImageColumn::make('image_1')
                    ->visibility('public'),
                ImageColumn::make('image_2')
                    ->visibility('public'),
                IconColumn::make('is_available')
                    ->label('Available')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('')
                    ->color('warning')
                    ->icon(Heroicon::PencilSquare),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
