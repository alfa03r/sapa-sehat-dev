<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Kategor')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, callable $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Select::make('color')
                    ->label('Warna Label')
                    ->options([
                        'primary' => 'Biru (Primary)',
                        'success' => 'Hijau (Success)',
                        'danger' => 'Merah (Danger)',
                        'warning' => 'Kuning (Warning)',
                        'info' => 'Cyan (Info)',
                    ])
                    ->default('primary')
                    ->required(),
            ]);
    }
}
