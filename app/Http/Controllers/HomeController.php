<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Track;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $trackRecently = Track::with('artist')->with(['album' => ['artist']])->latest()->first();
        $albumRecently = Album::with('artist')->with(['tracks' => ['artist', 'album']])->latest()->first();

        $newProject = null;

        if ($trackRecently->count() > $albumRecently->count()) {
            $newProject = $trackRecently;
        } else {
            $newProject = $albumRecently;
        }

        Carbon::setLocale('fr');
        $newProject->created_at->diffForHumans();
        
        setlocale(LC_TIME, 'French');
        $dateProjectRecently = $newProject->created_at->formatLocalized('%d %B %Y');

        // return response()->json([
        //     'projectRecently' => $newProject,
        //     'dateProjectRecently' => $dateProjectRecently
        // ]);
        
        return view('pages/home', [
            'projectRecently' => $newProject,
            'dateProjectRecently' => $dateProjectRecently
        ]);
    }
}
