<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->columnSpan(1)
                    ->required(),
                Select::make('tech')
                    ->columnSpan(1)
                    ->options([
                        'Laravel' => 'Laravel',
                        'Bootstrap' => 'Bootstrap',
                        'TailwindCSS' => 'TailwindCSS',
                        'NextJs' => 'NextJs',
                        'VueJs' => 'VueJs',
                        'Codeigniter' => 'Codeigniter',
                        'Filament' => 'Filament',
                        'ReactJs' => 'ReactJs',
                        'NodeJs' => 'NodeJs',
                        'TelegramApi' => 'TelegramApi',
                        'Firebase' => 'Firebase',
                        'MySql' => 'MySql',
                        'PostgreeSql' => 'PostgreeSql',
                    ])
                    ->multiple()
                    ->searchable()
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('github_url')
                    ->label('Link Github'),
                TextInput::make('demo_url')
                    ->label('Link Demo'),
                FileUpload::make('image')
                    ->image()
                    ->directory('projects')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->columnSpan(1)
                    ->label('Publish')
                    ->onIcon(Heroicon::CheckCircle)
                    ->offIcon(Heroicon::XCircle)
                    ->inline(false)
                    ->required(),
            ]);
    }
}
