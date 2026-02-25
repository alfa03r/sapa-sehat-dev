<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $featuredEvents = Event::with('category')
            ->where('is_featured', true)
            ->where('status', 'active')
            ->get();
        $latestEvents = Event::with('category')
            ->where('status', 'active')
            ->latest('event_date')
            ->take(6)
            ->get();

        return view('home', [
            'featured' => $featuredEvents,
            'latest' => $latestEvents
        ]);
    }
}
