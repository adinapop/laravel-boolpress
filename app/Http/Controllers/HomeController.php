<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

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

        // metterlo solo nel metodo che vogliamo "chiuso"/protetto
        $user = Auth::user();

        if(empty($user)) {
            return 'You must be logged';
        }

        $posts = Post::all();
        return view('homepage', compact('posts'));
    }
}
