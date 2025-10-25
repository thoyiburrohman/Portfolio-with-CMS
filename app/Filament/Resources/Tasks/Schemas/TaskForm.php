<?php

namespace App\Filament\Resources\Tasks\Schemas;

use App\Models\Project;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TaskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('project_id')
                    ->label('Nama Project')
                    ->options(Project::query()->where('status', 0)->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('name')
                    ->label('Nama Task')
                    ->required(),
                RichEditor::make('description')
                    ->label('Keterangan')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_completed')
                    ->label('Status')
                    ->hiddenOn('create'),
            ]);
    }
}
