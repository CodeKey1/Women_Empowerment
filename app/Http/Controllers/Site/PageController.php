<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Guide_Women;
use App\Models\Mobadrat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function training()
    {
        //

        return view('site.pages.training');
    }
    public function training_details()
    {
        //
        return view('site.pages.course-details');
    }
    public function namazeg()
    {
        //
        $guide = Guide_Women::select()->get();
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.namazeg',compact('mopadarat','guide'));
    }
    public function namazeg_project()
    {
        //
        $guide = Guide_Women::select()->get();
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.namazeg_project');
    }
    /**
     * Display a listing of the resource.
     */
    public function site()
    {
        //
        $guide = Guide_Women::select()->get();
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.index',compact('mopadarat','guide'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.stratgey',compact('mopadarat'));
    }
    /**
     * Display a listing of the resource.
     */
    public function guide()
    {
        //
        $guide = Guide_Women::select()->get();
        return view('site.pages.women_guide',compact('guide'));
    }
    /**
     * Display a listing of the resource.
     */
    public function project_design()
    {
        //
        return view('site.pages.design_project');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function instructions()
    {
        //
        return view('site.pages.instructions');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function initiatives()
    {
        //
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.initiatives',compact('mopadarat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
