<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $latest = Event::with('category')
            ->where('status', 'active')
            ->latest('event_date')
            ->take(6)
            ->get();

        return view('home', compact('latest'));
    }

    public function about()
    {
        return view('about');
    }

    public function events(Request $request)
    {
        // 1. Ambil semua data kategori untuk dropdown filter
        $categories = Category::all();

        // 2. Query event dengan filter
        $events = Event::query()
            ->where('status', 'active')
            // Filter Search (Judul)
            ->when($request->search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            // Filter Category
            ->when($request->category, function ($query, $categorySlug) {
                return $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->latest('event_date')
            ->paginate(9)
            ->withQueryString();

        // 3. Pastikan $categories ikut dikirim ke view menggunakan compact()
        return view('events.index', compact('events', 'categories'));
    }

    public function showEvents($slug)
    {
        $event = Event::with('category')
            ->where('slug', $slug)
            ->firstOrFail();
        return view('events.show', compact('event'));
    }

    public function contact()
    {
        return view('contact');
    }

}
