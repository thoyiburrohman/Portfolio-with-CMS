<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\IconSize;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->disabledClick()
                    ->searchable(),
                TextColumn::make('tasks_count')->counts([
                    'tasks' => fn(Builder $query) => $query->where('is_completed', false),
                ])
                    ->disabledClick()
                    ->searchable(),
                IconColumn::make('status')
                    ->label('Published')
                    ->disabledClick()
                    ->boolean(),
                ImageColumn::make('image')
                    ->visibility('public')
                    ->disabledClick(),
                IconColumn::make('github_url')
                    ->label('Link Github')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->github_url),
                IconColumn::make('demo_url')
                    ->label('Link Demo')
                    ->icon(Heroicon::ArrowTopRightOnSquare)
                    ->color('primary')
                    ->size(IconSize::Medium)
                    ->url(fn($record) => $record->demo_url),
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
