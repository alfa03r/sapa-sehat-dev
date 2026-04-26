<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Kegiatan', Event::count())
                ->description('Seluruh data kegiatan & promosi')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('primary'),

            Stat::make('Kegiatan Aktif', Event::where('status', 'active')->count())
                ->description('Kegiatan yang siap ditampilkan')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Total Kategori', Category::count())
                ->description('Jumlah kategori acara')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info'),
        ];
    }
}
