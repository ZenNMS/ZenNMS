<?php

namespace App\Http\Controllers;

use App\Http\Requests\RackFormRequest;
use App\Models\Rack;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.rack.index', [
            'racks' => Rack::with('type')->orderBy('name')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $types = DB::table('rack_types')->orderBy('name')->get();

        return view('pages.rack.create', [
            'facilities' => Collection::make([]),
            'groups' => Collection::make([]),
            'rack_roles' => Collection::make([]),
            'rack_types' => $types,
            'statuses' => Collection::make([]),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RackFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RackFormRequest $request)
    {
        $user = Auth::loginUsingId(1);

        $validated = $request->validated();

        $validated['display_name'] = $validated['name'];

        if ($request->input('tags') != '') {

            $tags = json_decode($request->input('tags'));

            $validated['tags'] = implode(
                ', ',
                collect($tags)->pluck('value')->toArray()
            );
        }

        $rack = Rack::create($validated);

        return route('rack.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Rack $rack)
    {
        return view('pages.rack.details', [
            'rack' => $rack,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function edit(Rack $rack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rack $rack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rack  $rack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rack $rack)
    {
        //
    }
}
