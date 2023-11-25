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

class AdminAddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function data()
    {
        return view('Dashboard.addPages.data');
    }
    public function ershadat()
    {
        return view('Dashboard.addPages.ershadat');
    }
    public function mopadrat()
    {
        return view('Dashboard.addPages.mopadrat');
    }
    public function news()
    {
        return view('Dashboard.addPages.news');
    }
    public function projects()
    {
        return view('Dashboard.addPages.project-model');
    }
    public function courses()
    {
        $type = Type::select()->get();
        return view('Dashboard.addPages.training', compact('type'));
    }
    //**************************** //
    //************Store*********** //
    //**************************** //
    public function data_store(Request $request)
    {
        try {
            //
            $file = "";
            if ($request->file('file')) {
                $file = Storage::disk('public')->put('data', $request->file('file'));
            }
            Data::create([
                "name" => $request['name'],
                "type" => $request['type'],
                "date" => $request['date'],
                "file" => $file,

            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
    public function ershadat_store(Request $request)
    {
        try {
            Guide_Women::create([
                "name" => $request['name'],
                "description" => $request['details'],
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
    public function mopadrat_store(Request $request)
    {
        try {
            Mobadrat::create([
                "name" => $request['name'],
                "description" => $request['details'],
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
    public function news_store(Request $request)
    {
        try {
            $image = "";
            if ($request->file('image')) {
                $image = Storage::disk('public')->put('news', $request->file('image'));
            }
            $video = "";
            if ($request->file('video')) {
                $video = Storage::disk('public')->put('news', $request->file('video'));
            }
            News::create([
                "name" => $request['name'],
                "brief" => $request['brief'],
                "details" => $request['details'],
                "date" => $request['date'],
                "image" => $image,
                "video" => $video,
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
    public function projects_store(Request $request)
    {
        try {
            $file = "";
            if ($request->file('image')) {
                $file = Storage::disk('public')->put('project-model', $request->file('image'));
            }
            Model_Project::create([
                "name" => $request['name'],
                "details" => $request['details'],
                "image" => $file,

            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
    public function courses_store(Request $request)
    {
        try {
            $image = "";
            if ($request->file('image')) {
                $image = Storage::disk('public')->put('training', $request->file('image'));
            }
            $course = Course::create([
                "name" => $request['name'],
                "details" => $request['details'],
                "date" => $request['date'],
                "cat" => $request['cat'],
                "image" => $image,
            ]);
            //details
            $video = "";
            if ($request->file('video')) {
                $video = Storage::disk('public')->put('training', $request->file('video'));
            }
            $presentation = "";
            if ($request->file('presentation')) {
                $presentation = Storage::disk('public')->put('training', $request->file('presentation'));
            }
            Courese_detail::create([
                "course_id" => $course->id,
                "pre_req" => $request['pre_req'],
                "description" => $request['description'],
                "for_whom" => $request['for_whom'],
                "location" => $request['location'],
                "presentation" => $presentation,
                "video" =>  $video
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
}
