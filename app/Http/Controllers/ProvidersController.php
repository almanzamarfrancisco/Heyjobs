<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ProvidersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:provider', 'DashboardViews']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ["posts" => Post::all()->reverse()]);
    }
    public function dashboard()
    {
        return view('layouts.principal');
    }
    public function search()
    {
        return view('search');
    }
}