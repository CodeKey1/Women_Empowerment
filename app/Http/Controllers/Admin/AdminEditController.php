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
use App\Models\Project;
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
        try {
            $file = "";
            if ($request->file('file')) {
                $file = Storage::disk('public')->put('data', $request->file('file'));
            }
            $data = Data::where('id', $id)->update([
                "name" => $request['name'],
                "type" => $request['type'],
                "date" => $request['date'],
                "file" => $file,
            ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function ershadat_update(Request $request, string $id)
    {
        try {
            Guide_Women::where('id', $id)->update([
                "name" => $request['name'],
                "description" => $request['details'],
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function mopadrat_update(Request $request, string $id)
    {
        try {
            Mobadrat::where('id', $id)->update([
                "name" => $request['name'],
                "description" => $request['details'],
            ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function news_update(Request $request, string $id)
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
            News::where('id', $id)->update([
                "name" => $request['name'],
                "brief" => $request['brief'],
                "details" => $request['details'],
                "date" => $request['date'],
                "image" => $image,
                "video" => $video,
            ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
    public function projects_update(Request $request, string $id)
    {
        try {
            $file = "";
            if ($request->file('image')) {
                $file = Storage::disk('public')->put('project-model', $request->file('image'));
            }
            Model_Project::where('id', $id)->update([
                "name" => $request['name'],
                "details" => $request['details'],
                "image" => $file,
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function courses_update(Request $request, string $id)
    {
        try {
            $image = "";
            if ($request->file('image')) {
                $image = Storage::disk('public')->put('training', $request->file('image'));
            }
            Course::where('id', $id)->update([
                "name" => $request['name'],
                "details" => $request['details'],
                "date" => $request['date'],
                "type_id" => $request['cat'],
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
            if (Courese_detail::where('course_id', $id)->first())
                Courese_detail::where('course_id', $id)->update([
                    "pre_req" => $request['pre_req'],
                    "description" => $request['description'],
                    "for_whom" => $request['for_whom'],
                    "location" => $request['location'],
                    "presentation" => $presentation,
                    "video" => $video,
                ]);
            else
                Courese_detail::create([
                    "course_id" => $id,
                    "pre_req" => $request['pre_req'],
                    "description" => $request['description'],
                    "for_whom" => $request['for_whom'],
                    "location" => $request['location'],
                    "presentation" => $presentation,
                    "video" =>  $video
                ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
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
            if ($course_details = Courese_detail::where('course_id', $id)->first()) {
                $course_details->delete();
                $course = Course::find($id);
                $course->delete();
                return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
            } else {
                $course = Course::find($id);
                $course->delete();
                return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    //**************************** //
    //***********edit*********** //
    //**************************** //
    public function users_update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            "name" => $request['name'],
            "email" => $request['email'],
            'password' => Hash::make($request->password),

        ]);
        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }
    public function project_state_update(Request $request, string $id) {
        Project::where('id', $id)->update([
            "state" => $request['new_state'],
        ]);
        return redirect()->back()->with(['success' => 'تم التعديل']);
    }

}
