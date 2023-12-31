<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\TrainingRequest;
use App\Models\Courese_detail;
use App\Models\Course;
use App\Models\Model_Project;
use App\Models\Project;
use App\Models\Project_owner;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function back()
    // {
    //     //
    //     return redirect()->back();
    // }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     return view('admin.pages.dashboard');
    // }
    // public function apply_project()
    // {
    //     //
    //     $apply = Project::select()->get();
    //    // $apply = Project_owner::select()->get();
    //     return view('Dashboard.dashboard', compact('apply'));
    // }
    public function users()
    {
        $users = User::select()->get();
        return view('Dashboard.users', compact('users'));
    }
    public function users_edit(string $id)
    {
        $users = User::select()->find($id);
        return view('Dashboard.editPages.user', compact('users'));
    }
    public function users_delete(string $id)
    {
        $User = User::find($id);
        $User->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
    public function courses()
    {
        //
        $courses = Course::select()->get();
        return view('Dashboard.training', compact('courses'));
    }
    public function coursescreate()
    {
        //
        $courses = Course::select()->get();
        return view('Dashboard.pages.trainingcreate', compact('courses'));
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
            $presentation = "";
            if ($request->file('presentation')) {
                $presentation = Storage::disk('public')->put('tranning', $request->file('presentation'));
            }
            Courese_detail::create([
                "course_id" => $course->id,
                "pre_req" => $request['pre_req'],
                "description" => $request['description'],
                "for_whom" => $request['for_whom'],
                "location" => $request['location'],
                "presentation" => $presentation,
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
        $old_project = Model_Project::select()->get();
        return view('Dashboard.pages.old_project', compact('old_project'));
    }
    public function create()
    {
        //
        return view('Dashboard.pages.old_project_create');
    }
    public function store(ProjectRequest $request)
    {
        //
        try {
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

            Model_Project::create([
                "name" => $request['name'],
                "details" => $request['details'],
                "image" => implode('|', $upload),

            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function projectDelete(string $id)
    {
        $project = Model_Project::find($id);
        $project->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
    public function course_edit(string $id)
    {
        //
        $courses = Course::select()->find($id);
        $Courese_detail = Courese_detail::select()->where('course_id', $id)->get();
        return view('Dashboard.pages.trainingedit', compact('courses', 'Courese_detail'));
    }
    public function course_update(TrainingRequest $request, string $id)
    {
        //
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
            Course::where('id', $id)->update([
                "name" => $request['name'],
                "details" => $request['details'],
                "date" => $request['date'],
                "type_id" => $request['cat'],
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
            Courese_detail::where('course_id', $id)->update([
                "pre_req" => $request['pre_req'],
                "description" => $request['description'],
                "for_whom" => $request['for_whom'],
                "location" => $request['location'],
                "presentation" => $request['presentation'],
                "video" => implode('|', $video)

            ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function project_update(Request $request, string $id)
    {
        try {
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

            Model_Project::where('id', $id)->update([
                "name" => $request['name'],
                "details" => $request['details'],
                "image" => implode('|', $upload),

            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function update(Request $request, string $id)
    {
        //
        try {
            Project_owner::where('user_id', $id)->update([
                "state" => $request['state'],

            ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function destroy(string $id)
    {
        //
    }
}
