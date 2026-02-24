<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Kategori')
                    ->required(),
                    
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, callable $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                FileUpload::make('thumbnail')
                    ->label('Poster/Gambar')
                    ->image()
                    ->directory('events-thumbnails')
                    ->columnSpanFull(),


                RichEditor::make('content')
                    ->label('Deskripsi Acara')
                    ->required()
                    ->columnSpanFull(),

                DateTimePicker::make('event_date')
                    ->label('Tanggal Acara'),

                TextInput::make('location')
                    ->label('Lokasi'),

                TextInput::make('price')
                    ->label('Harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->suffix(',-'),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'Active', 
                        'inactive' => 'Inactive'])
                    ->default('active')
                    ->required(),

                Toggle::make('is_featured')
                    ->label('Tampilkan di Beranda')
                    ->required(),
            ]);
    }
}
