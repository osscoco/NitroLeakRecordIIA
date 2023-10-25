<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Prod;
use App\Models\Track;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        //SECTIONS
        
        //NEWS
        $trackRecently = Track::with('artist')->with(['album' => ['artist']])->latest()->first();
        $albumRecently = Album::with('artist')->with(['tracks' => ['artist', 'album']])->latest()->first();

        $newProject = null;

        if ($trackRecently !== null && $albumRecently !== null) {

            if ($trackRecently->created_at > $albumRecently->created_at) {
                $newProject = $trackRecently;
            } else {
                $newProject = $albumRecently;
            }
        } else if ($trackRecently !== null && $albumRecently == null) {
            $newProject = $trackRecently;
        } else if ($trackRecently == null && $albumRecently !== null) {
            $newProject = $albumRecently;
        } else {

            return view('pages/home');
        }

        Carbon::setLocale('fr');
        $newProject->created_at->diffForHumans();
        
        setlocale(LC_TIME, 'French');
        $dateProjectRecently = $newProject->created_at->formatLocalized('%d %B %Y');

        //TOP15Artistes
        $top15Artistes_A = Track::with('artist')->with(['album' => ['artist']])->orderBy('countListening', 'desc')->skip(0)->take(5)->get(); //get first 10 rows
        $top15Artistes_B = Track::with('artist')->with(['album' => ['artist']])->orderBy('countListening', 'desc')->skip(5)->take(5)->get(); //get next 10 rows
        $top15Artistes_C = Track::with('artist')->with(['album' => ['artist']])->orderBy('countListening', 'desc')->skip(10)->take(5)->get(); //get next 10 rows

        //TOP15Beatmakers
        $top15Beatmakers_A = Prod::with('beatmaker')->with(['pack' => ['beatmaker']])->orderBy('countListening', 'desc')->skip(0)->take(5)->get(); //get first 10 rows
        $top15Beatmakers_B = Prod::with('beatmaker')->with(['pack' => ['beatmaker']])->orderBy('countListening', 'desc')->skip(5)->take(5)->get(); //get next 10 rows
        $top15Beatmakers_C = Prod::with('beatmaker')->with(['pack' => ['beatmaker']])->orderBy('countListening', 'desc')->skip(10)->take(5)->get(); //get next 10 rows

        // return response()->json([
        //     'firstPage' => $top15Beatmakers_A,
        //     'middlePage' => $top15Beatmakers_B,
        //     'lastPage' => $top15Beatmakers_C
        // ]);

        return view('pages/home', [
            'projectRecently' => $newProject,
            'dateProjectRecently' => $dateProjectRecently,
            'top15Artistes_A' => $top15Artistes_A,
            'top15Artistes_B' => $top15Artistes_B,
            'top15Artistes_C' => $top15Artistes_C,
            'top15Beatmakers_A' => $top15Beatmakers_A,
            'top15Beatmakers_B' => $top15Beatmakers_B,
            'top15Beatmakers_C' => $top15Beatmakers_C
        ]);
    }
}
