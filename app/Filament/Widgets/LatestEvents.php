<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class LatestEvents extends TableWidget
{
    // Membuat tabel ini memenuhi lebar layar (Full width)
    protected int|string|array $columnSpan = 'full';

    // Memberi urutan agar tampil di bawah Widget Statistik
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                // Mengambil 5 kegiatan terbaru
                Event::query()->latest()->limit(5)
            )
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Kegiatan')
                    ->limit(40),
                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge(),
                TextColumn::make('event_date')
                    ->label('Tanggal Pelaksanaan')
                    ->dateTime('d M Y H:i'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'danger',
                        default => 'gray',
                    }),
            ])
            // Menghilangkan pagination karena hanya menampilkan 5 data
            ->paginated(false);
    }
}
