<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\TrainingRequest;
use App\Models\Courese_detail;
use App\Models\Course;
use App\Models\Old_Project;
use App\Models\Project_owner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function back()
    {
        //
        return redirect()->back();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apply = Project_owner::select()->get();
        return view('admin.pages.dashboard', compact('apply'));
    }
    public function courses()
    {
        //
        $courses = Course::select()->get();
        return view('admin.pages.training', compact('courses'));
    }
    public function coursescreate()
    {
        //
        $courses = Course::select()->get();
        return view('admin.pages.trainingcreate', compact('courses'));
    }
    public function courses_store(TrainingRequest $request)
    {
        try {

            $file = [];
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $ext = strtolower($file->getClientOriginalName());
                    $file_name = time() . '.' . $ext;
                    $path = 'images/course';
                    $file->move($path, $file_name);
                    $upload[] = $file_name;
                }
            } else {
                $upload[] = '';
            }


            $course = Course::create([
                "name" => $request['name'],
                "details" => $request['details'],
                "date" => $request['date'],
                "cat" => $request['cat'],
                "image" => implode('|', $upload),

            ]);
            $file = [];
            if ($files = $request->file('video')) {
                foreach ($files as $file) {
                    $ext = strtolower($file->getClientOriginalName());
                    $file_name = time() . '.' . $ext;
                    $path = 'images/course';
                    $file->move($path, $file_name);
                    $video[] = $file_name;
                }
            } else {
                $video[] = '';
            }
            Courese_detail::create([
                "course_id" => $course->id,
                "pre_req" => $request['pre_req'],
                "description" => $request['description'],
                "for_whom" => $request['for_whom'],
                "location" => $request['location'],
                "presentation" => $request['presentation'],
                "video" => implode('|', $video)

            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function courseDelete(string $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
    public function old_project()
    {
        //
        $old_project = Old_Project::select()->get();
        return view('admin.pages.old_project', compact('old_project'));
    }
    public function create()
    {
        //
        return view('admin.pages.old_project_create');
    }
    public function store(ProjectRequest $request)
    {
        //
        $file = [];
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $ext = strtolower($file->getClientOriginalName());
                $file_name = time() . '.' . $ext;
                $path = 'images/ng';
                $file->move($path, $file_name);
                $upload[] = $file_name;
            }
        } else {
            $upload[] = '';
        }

        Old_Project::create([
            "name" => $request['name'],
            "details" => $request['details'],
            "image" => implode('|', $upload),

        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }
    public function projectDelete(string $id)
    {
        $project = Old_Project::find($id);
        $project->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
        try{
            Project_owner::where('user_id',$id)->update([
                "state" => $request['state'],

            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }


    }
    public function destroy(string $id)
    {
        //
    }
}
