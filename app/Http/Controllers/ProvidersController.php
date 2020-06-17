<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Engagement;
use Carbon\Carbon;

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
        return view('home', ["posts" => Post::all()->reverse(), "requested_engagements" => Engagement::whereProviderId(auth()->user()->id)->whereState('requested')->get()]);
    }
    public function dashboard()
    {
        return view('layouts.principal');
    }
    public function search()
    {
        return view('search');
    }
    public function engagementsDashboard(Request $request)
    {
        $request->validate([
            'engagement_id' => 'numeric|nullable',
        ]);
        $engagements = Engagement::whereProviderId(auth()->user()->id)->get();
        $selected_engagement = Engagement::find($request->engagement_id);
        if($selected_engagement && $selected_engagement->provider_id === auth()->user()->id )
            return view('engaments_dashboard', [ "requested_engagements" => Engagement::whereProviderId(auth()->user()->id)->whereState('requested')->get(), "selected_engagement" => $selected_engagement, "engagements" => $engagements ]);
        else{
            // dd($engagements->where('state', 'requested'), $engagements->first());
            return view('engaments_dashboard', [ "requested_engagements" => $engagements->where('state', 'requested') , "selected_engagement" =>  $engagements->first(), "engagements" => $engagements]);
        }
    }
    public function changeEngagementState(Request $request)
    {
        $request->validate([
            'engagement_id' => 'numeric',
            'state' => 'string',
        ]);
        $engagement = Engagement::whereProviderId(auth()->user()->id)->whereId($request->engagement_id)->get();
        if($engagement->count() !== 1)
            abort(403, 'acción no autorizada.');
        if($engagement[0]->update(['state' => $request->state]))
            return back();
        else
            abort(403, 'acción no autorizada.');
    }
    public function changeEngagementInfo(Request $request)
    {
        $request->validate([
            'request' => 'string|nullable',
            'concept' => 'string|nullable',
            'description' => 'string|nullable',
            'prepayment' => 'numeric|nullable',
            'estimated_completion_date' => 'date_format:m/d/Y|nullable',
        ]);
        $engagement = Engagement::whereProviderId(auth()->user()->id)->whereId($request->engagement_id  )->get();
        if($engagement->count() !== 1)
            abort(403, 'acción no autorizada.');
        $engagement = Engagement::whereProviderId(auth()->user()->id)->whereId($request->engagement_id  )->first();
        $update = $engagement->update([
            'request' => $request->get('request'),
            'concept' => $request->concept,
            'description' => $request->description,
            'prepayment' => $request->prepayment,
            'estimated_completion_date' => Carbon::parse($request->estimated_completion_date),
        ]);

        if($update)
            return redirect(route('engagements_dashboard')."?engagement_id={$engagement->id}");
        else
            abort(403, 'acción no autorizada.');
    }
}
