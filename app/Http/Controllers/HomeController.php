<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }


    public function pageView(Request $request) {
        $path = $request->path();

        // Only allow simple page slugs. This blocks path traversal and the
        // rendering of internal partials (names containing "_", "archive",
        // dot segments, etc.) via the catch-all route.
        if (! preg_match('#^[a-z0-9]+(?:[/-][a-z0-9]+)*$#', $path)
            || str_contains($path, '..')
            || str_contains($path, 'archive')
            || str_contains(basename($path), '_')) {
            abort(404);
        }

        if(view()->exists($path)) {
            return view($path);
        } else {
            abort(404);
        }
    }
}
