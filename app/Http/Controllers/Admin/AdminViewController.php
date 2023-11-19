<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\TrainingRequest;
use App\Models\Courese_detail;
use App\Models\Course;
use App\Models\Data;
use App\Models\News;
use App\Models\Guide_Women;
use App\Models\Mobadrat;
use App\Models\Model_Project;
use App\Models\Project_owner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apply = Project_owner::select()->get();
        return view('Dashboard.dashboard', compact('apply'));
    }
    public function data()
    {
        $openData = Data::select()->get();
        return view('Dashboard.data', compact('openData'));
    }
    public function ershadat()
    {
        $ershadat = Guide_Women::select()->get();
        return view('Dashboard.ershadat', compact('ershadat'));
    }
    public function mopadrat()
    {
        $mopadrat = Mobadrat::select()->get();
        return view('Dashboard.mopadrat', compact('mopadrat'));
    }
    public function news()
    {
        $news = News::select()->get();
        return view('Dashboard.news', compact('news'));
    }
    public function projects()
    {
        //
        $projects = Model_Project::select()->get();
        return view('Dashboard.project-model', compact('projects'));
    }
    public function courses()
    {
        //
        $training = Course::select()->get();
        return view('Dashboard.training', compact('training'));
    }
    public function users()
    {
        $users = User::select()->get();
        return view('Dashboard.users', compact('users'));
    }
}
