<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Post;
use App\Profile;

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
        $posts = User::find(Auth::id())->posts;
        $posts = Post::orderBy('id', 'DESC')->get();
        $profile = Profile::first();
        return view('dashboard')->with('posts', $posts)
                                ->with('profile', $profile);
        // return view('home');
    }
}
