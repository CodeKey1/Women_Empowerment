<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Courese_detail;
use App\Models\Course;
use App\Models\Data;
use App\Models\Guide_Women;
use App\Models\Project;
use App\Models\Project_owner;
use App\Models\Project_risk;
use App\Models\Project_study;
use App\Models\Project_Plan;
use App\Models\Project_form;
use App\Models\Project_performane;
use App\Models\Mobadrat;
use App\Models\Old_Project;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function training()
    {
        //
        $courses = Course::select()->get();
        return view('site.pages.training', compact('courses'));
    }
    public function successIndex()
    {
        //

        return view('site.pages.projectSuccess');
    }
    public function training_details(string $id)
    {
        //
        $details = Courese_detail::select()->where('course_id', $id)->get();
        return view('site.pages.course-details', compact('details'));
    }
    public function namazeg()
    {
        //
        $guide = Guide_Women::select()->get();
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.namazeg', compact('mopadarat', 'guide'));
    }
    public function namazeg_project()
    {
        //
        $guide = Guide_Women::select()->get();
        $old_project = Old_Project::select()->get();
        return view('site.pages.namazeg_project', compact('old_project'));
    }
    /**
     * Display a listing of the resource.
     */
    public function site()
    {
        //
        $guide = Guide_Women::select()->get();
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.index', compact('mopadarat', 'guide'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.stratgey', compact('mopadarat'));
    }
    /**
     * Display a listing of the resource.
     */
    public function Data()
    {
        //
        $data = Data::select()->get();
        return view('site.pages.openData', compact('data'));
    }
    /**
     * Display a listing of the resource.
     */
    public function viewProject()
    {
        //
        $type = Type::select()->get();
        $Project_owner = Project_owner::select()->where('user_id', Auth::user()->id)->get();
        $Project = Project::select()->where('user_id', Auth::user()->id)->get();
        $Project_risk = Project_risk::select()->where('user_id', Auth::user()->id)->get();
        $Project_study = Project_study::select()->where('user_id', Auth::user()->id)->get();
        $Project_Plan = Project_Plan::select()->where('user_id', Auth::user()->id)->get();
        $Project_form = Project_form::select()->where('user_id', Auth::user()->id)->get();
        $Project_performane = Project_performane::select()->where('user_id', Auth::user()->id)->get();
        return view('site.pages.viewProject', compact('type', 'Project_owner', 'Project', 'Project_risk', 'Project_study', 'Project_Plan', 'Project_form', 'Project_performane'));
    }
    /**
     * Display a listing of the resource.
     */
    public function guide()
    {
        //
        $guide = Guide_Women::select()->get();
        return view('site.pages.women_guide', compact('guide'));
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
        return view('site.pages.initiatives', compact('mopadarat'));
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
