<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Mobadrat;
use App\Models\Project_form;
use App\Models\Project_owner;
use App\Models\Project_plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile()
    {
        //Auth()->id()
        $project = Project::select()->where('user_id',Auth()->id())->get();
        $apply = Project_owner::select()->where('user_id',Auth()->id())->get();
        return view('site.pages.dashboard',compact('apply','project'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apply = Project::select()->get();
        return view('admin.pages.apply.all_apply',compact('apply'));
    }

    public function mopdara()
    {
        //
        $mopadra = Mobadrat::select()->get();
        return view('admin.pages.mopadra',compact('mopadra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $apply = Project::select()->find($id);
        return view('admin.pages.apply.view',compact('apply'));
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
