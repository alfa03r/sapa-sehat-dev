<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $latest  = Event::with('category')
            ->where('status','active')
            ->latest('event_date')
            ->take(6)
            ->get();

        return view('home', compact('latest'));
    }

    public function about()
    {
        return view('about');
    }

    public function events()
    {
        $events = Event::with('category')
            ->where('status','active')
            ->latest('event_date')
            ->paginate(9);

        return view('events.index', compact('events'));
    }

    public function showEvents($slug)
    {
        $event = Event::with('category')
            ->where('slug',$slug)
            ->firstOrFail();
        return view('events.show', compact('event'));
    }

    public function contact()
    {
        return view('contact');
    }
    
}
