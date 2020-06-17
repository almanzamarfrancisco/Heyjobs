<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Occupation;
use App\Provider;
use App\Engagement;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'DashboardViews']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ["posts" => Post::all()->reverse(), "occupations" => Occupation::all()]);
    }
    public function search()
    {
        return view('search', [/*"posts" => Post::all()->reverse(),*/ "occupations" => Occupation::all()]);
    }
    public function engagements()
    {
        // return Engagement::whereUserId(auth()->user()->id)->get();
        return view('client_engagement', ["engagements" => Engagement::whereUserId(auth()->user()->id)->get(), "occupations" => Occupation::all()]);
    }
    public function searchProvider(Request $request)
    {
        $request->validate([
            'search_occupation' => 'string',
            'type' => 'string',
        ]);
        return view('search', ["found_providers" => Occupation::with('providers')->whereSlug($request->search_occupation)->get()->pluck('providers')[0], "occupations" => Occupation::all()]);
    }
    public function showProvider(Request $request)
    {
        return view('provider_profile', ["provider" => Provider::find($request->provider_id), "occupations" => Occupation::all()]);
    }
    public function requestContract(Request $request)
    {
        $request->validate([
            'request' => 'string',
            'provider_id' => 'numeric',
        ]);
        $engagement = Engagement::create([
            'user_id'=> auth()->user()->id,
            'provider_id'=> $request->provider_id,
            'state'=> 'requested',
            'request'=> '',
            'concept'=> '',
            'description'=> '',
        ]);
        if(!$engagement)
            return back()->with(["provider" => Provider::find($request->provider_id), "occupations" => Occupation::all()]);
        return view('contactyousoon');
    }
}
