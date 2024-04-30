<?php

namespace App\Http\Controllers;
use App\Models\Casal;

use Illuminate\Http\Request;

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
        $casals = Casal::all();
        return view('home', ['casals' => $casals]);
    }
}
