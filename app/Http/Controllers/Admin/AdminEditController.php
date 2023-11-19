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
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function data(string $id)
    {
        $data = Data::select()->find($id);
        return view('Dashboard.editPages.data', compact('data'));
    }
    public function ershadat(string $id)
    {
        $ershadat = Guide_Women::select()->find($id);
        return view('Dashboard.editPages.ershadat', compact('ershadat'));
    }
    public function mopadrat(string $id)
    {
        $mopadrat = Mobadrat::select()->find($id);
        return view('Dashboard.editPages.mopadrat', compact('mopadrat'));
    }
    public function news(string $id)
    {
        $news = News::select()->find($id);
        return view('Dashboard.editPages.news', compact('news'));
    }
    public function projects(string $id)
    {
        $projects = Model_Project::select()->find($id);
        return view('Dashboard.editPages.project-model', compact('projects'));
    }
    public function courses(string $id)
    {
        $types = Type::select()->get();
        $courses = Course::select()->find($id);
        $courses_details = Courese_detail::select()->where('course_id', $id)->first();
        return view('Dashboard.editPages.training', compact('types', 'courses', 'courses_details'));
    }
    //**************************** //
    //************Store*********** //
    //**************************** //
    public function data_update(Request $request, string $id)
    {
    }
    public function ershadat_update(Request $request, string $id)
    {
    }
    public function mopadrat_update(Request $request, string $id)
    {
    }
    public function news_update(Request $request, string $id)
    {
    }
    public function projects_update(Request $request, string $id)
    {
    }
    public function courses_update(Request $request, string $id)
    {
    }
    //**************************** //
    //***********Delete*********** //
    //**************************** //
    public function data_delete(string $id)
    {
        try {
            $data = Data::find($id);
            $data->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function ershadat_delete(string $id)
    {
        try {
            $course = Guide_Women::find($id);
            $course->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function mopadrat_delete(string $id)
    {
        try {
            $course = Mobadrat::find($id);
            $course->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function news_delete(string $id)
    {
        try {
            $news = News::find($id);
            $news->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function projects_delete(string $id)
    {
        try {
            $project = Model_Project::find($id);
            $project->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function courses_delete(string $id)
    {
        try {
            $course_details = Courese_detail::where('course_id', $id)->first();
            $course_details->delete();
            $course = Course::find($id);
            $course->delete();
            return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
