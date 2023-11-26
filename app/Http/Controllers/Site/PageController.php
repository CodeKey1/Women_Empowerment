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
use App\Models\Model_Project;
use App\Models\News;
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
        $type = Type::select()->get();
        $courses = Course::select()->get();
        return view('site.pages.training', compact('courses', 'type'));
    }
    public function news()
    {
        //$courses = Course::select()->get();
        $news = News::select()->get();
        return view('site.pages.news', compact('news'));
    }
    public function news_details(string $id)
    {
        $new = News::whereId($id)->firstOrFail();
        $news = News::select()->find($id);
        return view('site.pages.news_details', compact('news', 'new'));
    }
    public function successIndex()
    {
        //

        return view('site.pages.projectSuccess');
    }
    public function training_details(string $id)
    {
        $course = Course::select()->where('id', $id)->first();
        $details = Courese_detail::select()->where('course_id', $id)->first();
        return view('site.pages.course-details', compact('course', 'details'));
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
        //$guide = Guide_Women::select()->get();
        $old_project = Model_Project::select()->get();
        return view('site.pages.namazeg_project', compact('old_project'));
    }
    public function namazeg_projectGet(string $id)
    {
        //
        //$guide = Guide_Women::select()->get();
        $old_project = Model_Project::select()->find($id);
        return view('site.pages.namazeg_project_details', compact('old_project'));
    }
    /**
     * Display a listing of the resource.
     */
    public function site()
    {
        //
        $type = Type::select()->get();
        $courses = Course::select()->get();
        $news = News::select()->get();
        $old_project = Model_Project::select()->get();
        $guide = Guide_Women::select()->get();
        $mopadarat = Mobadrat::select()->get();
        return view('site.pages.index', compact('mopadarat', 'guide', 'old_project', 'news', 'courses', 'type'));
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
    // public function viewProject(string $id)
    // {
    //     //
    //     $type = Type::select()->get();
    //     $Project = Project::select()->where('id', $id)->first();
    //     $Project_risk = Project_risk::select()->where('project_id', $id)->get();
    //     $Project_study = Project_study::select()->where('project_id', $id)->get();
    //     $Project_Plan = Project_Plan::select()->where('project_id', $id)->get();
    //     $Project_form = Project_form::select()->where('project_id', $id)->get();
    //     $Project_performane = Project_performane::select()->where('project_id', $id)->get();
    //     return view('site.pages.viewProject', compact('type', 'Project', 'Project_risk', 'Project_study', 'Project_Plan', 'Project_form', 'Project_performane'));
    // }
    // public function viewOwner()
    // {
    //     $Project_owner = Project_owner::select()->where('user_id', Auth::user()->id)->first();
    //     return view('site.pages.viewOwner', compact('Project_owner'));
    // }
    // /**
    //  * Display a listing of the resource.
    //  */
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
    
}
