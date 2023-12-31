<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Course;
use App\Models\Course_applicants;
use App\Models\Project;
use App\Models\Project_owner;
use App\Models\Project_risk;
use App\Models\Project_study;
use App\Models\Project_Plan;
use App\Models\Project_form;
use App\Models\Project_performane;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;


class RegistrationController extends Controller
{
    /**
     * initial project data store
     */
    public function create()
    {
        $type = Type::select()->get();
        $city = City::select()->get();
        if (Project_owner::where('user_id', Auth::user()->id)->exists('user_id')) {
            $owner_id = Project_owner::where('user_id', Auth::user()->id)->first();
            return view('site.initial_registration', compact('type', 'city', 'owner_id'));
        }
        return view('site.initial_registration', compact('type', 'city'));
    }
    public function Initial_store(Request $request)
    {
        $project = Auth()->id();
        $owner_id = Project_owner::create([
            "name" => $request['name'],
            "nid" => $request['nid'],
            "email" => $request['email'],
            "phone" => $request['phone'],
            "address" => $request['address'],
            //"fund" => $request['fund'],
            "state" => 2,
            "user_id" => $project,
        ]);
        $owner_id = $owner_id->id;
        return redirect()->back()->with('project_active', true)->with(['success' => 'تم الحفظ بيانات رائدة الأعمال بنجاح']);
    }
    public function project_store(Request $request, string $id)
    {
        $project = Project::create([
            "name" => $request['name'],
            "type_id" => $request['type_id'],
            "city_id" => $request['city_id'],
            "idea" => $request['idea'],
            "goal" => $request['goal'],
            "innovation" => $request['innovation'],
            "future" => $request['future'],
            "location" => $request['location'],
            "smart" => $request['smart'],
            "trail" => $request['trail'],
            "email" => $request['email'],
            "fund" => $request['fund'],
            "date" => $request['date'],
            "owner_id" => $id,
        ]);
        $owner_id = $project->id;
        return redirect()->route('project.data', ['id' => $owner_id])->with('risk_active', true)->with(['success' => 'تم الحفظ بيانات المشروع بنجاح']);
    }
    /**
     * remaning project data store
     */
    public function create_project(string $id)
    {
        //
        $owner_id = $id;
        $type = Type::select()->get();
        return view('site.initial_data_registration', compact('type', 'owner_id'));
    }
    public function store(Request $request, string $id)
    {
        try {
            $form = $request['formType'];
            switch ($form) {
                case 'projectRisk':
                    Project_risk::create([
                        "name" => $request['name'],
                        "degree" => $request['degree'],
                        "possibility" => $request['possibility'],
                        "evaluation" => ($request['degree'] * $request['possibility']),
                        "procedures" => $request['procedures'],
                        "project_id" => $id,
                    ]);
                    $owner_id = $id;
                    return redirect()->route('project.data', ['id' => $owner_id])->with('drasa_active', true)->with('active', true)->with(['success' => 'تم الحفظ المخاطر المحتملة للمشروع الأعمال بنجاح']);
                    break;
                case 'projectStudy':
                    Project_study::create([
                        "recommendation" => $request['recommendation'],
                        "finance" => $request['finance'],
                        "technical" => $request['technical'],
                        "competitive" => $request['competitive'],
                        "market" => $request['market'],
                        "project_id" => $id,
                    ]);
                    $owner_id = $id;
                    return redirect()->route('project.data', ['id' => $owner_id])->with('plan_active', true)->with('active', true)->with(['success' => 'تم الحفظ  دراسة جدوى المشروع الأعمال بنجاح']);
                    break;
                case 'projectPlan':
                    for ($i = 0; $i < count($request->name); $i++) {
                        $name[] = $request->name[$i];
                        $start_date[] = $request->start_date[$i];
                        $end_date[] = $request->end_date[$i];
                        $responsible[] = $request->responsible[$i];
                        $follower[] = $request->follower[$i];
                        Project_Plan::create([
                            "name" => $name[$i],
                            "start_date" => $start_date[$i],
                            "end_date" => $end_date[$i],
                            "responsible" => $responsible[$i],
                            "follower" => $follower[$i],
                            "project_id" => $id,
                        ]);
                    }
                    $owner_id = $id;
                    return redirect()->route('project.data', ['id' => $owner_id])->with('template_active', true)->with('active', true)->with(['success' => 'تم الحفظ  خطة المشروع الأعمال بنجاح']);
                    break;
                case 'workForm':
                    Project_form::create([
                        "provided_value" => $request['provided_value'],
                        "customer_categories" => $request['customer_categories'],
                        "project_access" => $request['project_access'],
                        "attract_clients" => $request['attract_clients'],
                        "income_source" => $request['income_source'],
                        "main_resorce" => $request['main_resorce'],
                        "main_activity" => $request['main_activity'],
                        "partners" => $request['partners'],
                        "cost" => $request['cost'],
                        "project_id" => $id,
                    ]);
                    $owner_id = $id;
                    return redirect()->route('project.data', ['id' => $owner_id])->with('mosher_active', true)->with('active', true)->with(['success' => 'تم الحفظ  نموذج العمل الأعمال بنجاح']);
                    break;
                case 'projectPeroformance':
                    for ($i = 0; $i < count($request->period); $i++) {
                        $name[] = $request->name[$i];
                        $unit[] = $request->unit[$i];
                        $target[] = $request->target[$i];
                        $measurement[] = $request->measurement[$i];
                        $period[] = $request->period[$i];
                        Project_performane::create([
                            "name" => $name[$i],
                            "period" => $period[$i],
                            "unit" => $unit[$i],
                            "target" => $target[$i],
                            "measurement" => $measurement[$i],
                            "project_id" => $id,
                        ]);
                    }
                    $owner_id = $id;
                    return redirect()->route('project.data', ['id' => $owner_id])->with(['success' => 'تم الحفظ مؤشرات أداء المشروع بنجاح']);
                    break;
            }
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    /**
     * initial project data edit
     */
    public function edit_index(string $id)
    {
        $type = Type::select()->get();
        $city = City::select()->get();
        $Project = Project::select()->where('id', $id)->first();
        $Project_risk = Project_risk::select()->where('project_id', $id)->get();
        $Project_study = Project_study::select()->where('project_id', $id)->first();
        $Project_Plan = Project_Plan::select()->where('project_id', $id)->get();
        $Project_form = Project_form::select()->where('project_id', $id)->first();
        $Project_performane = Project_performane::select()->where('project_id', $id)->get();
        return view('site.project_data_update', compact('type', 'city', 'Project', 'Project_risk', 'Project_study', 'Project_Plan', 'Project_form', 'Project_performane'));
    }
    public function edit_store(Request $request, string $id)
    {
        try {
            $form = $request['formType'];
            switch ($form) {
                case 'projectRisk':
                    Project_risk::create([
                        "name" => $request['name'],
                        "degree" => $request['degree'],
                        "possibility" => $request['possibility'],
                        "evaluation" => ($request['degree'] * $request['possibility']),
                        "procedures" => $request['procedures'],
                        "project_id" => $id,
                    ]);
                    $owner_id = $id;
                    return redirect()->route('viewProject', ['id' => $owner_id])->with('drasa_active', true)->with('active', true)->with(['success' => 'تم الحفظ المخاطر المحتملة للمشروع الأعمال بنجاح']);
                    break;
                case 'projectStudy':
                    Project_study::create([
                        "recommendation" => $request['recommendation'],
                        "finance" => $request['finance'],
                        "technical" => $request['technical'],
                        "competitive" => $request['competitive'],
                        "market" => $request['market'],
                        "project_id" => $id,
                    ]);
                    $owner_id = $id;
                    return redirect()->route('viewProject', ['id' => $owner_id])->with('plan_active', true)->with('active', true)->with(['success' => 'تم الحفظ  دراسة جدوى المشروع الأعمال بنجاح']);
                    break;
                case 'projectPlan':
                    for ($i = 0; $i < count($request->name); $i++) {
                        $name[] = $request->name[$i];
                        $start_date[] = $request->start_date[$i];
                        $end_date[] = $request->end_date[$i];
                        $responsible[] = $request->responsible[$i];
                        $follower[] = $request->follower[$i];
                        Project_Plan::create([
                            "name" => $name[$i],
                            "start_date" => $start_date[$i],
                            "end_date" => $end_date[$i],
                            "responsible" => $responsible[$i],
                            "follower" => $follower[$i],
                            "project_id" => $id,
                        ]);
                    }
                    $owner_id = $id;
                    return redirect()->route('viewProject', ['id' => $owner_id])->with('template_active', true)->with('active', true)->with(['success' => 'تم الحفظ  خطة المشروع الأعمال بنجاح']);
                    break;
                case 'workForm':
                    Project_form::create([
                        "provided_value" => $request['provided_value'],
                        "customer_categories" => $request['customer_categories'],
                        "project_access" => $request['project_access'],
                        "attract_clients" => $request['attract_clients'],
                        "income_source" => $request['income_source'],
                        "main_resorce" => $request['main_resorce'],
                        "main_activity" => $request['main_activity'],
                        "partners" => $request['partners'],
                        "cost" => $request['cost'],
                        "project_id" => $id,
                    ]);
                    $owner_id = $id;
                    return redirect()->route('viewProject', ['id' => $owner_id])->with('mosher_active', true)->with('active', true)->with(['success' => 'تم الحفظ  نموذج العمل الأعمال بنجاح']);
                    break;
                case 'projectPeroformance':
                    for ($i = 0; $i < count($request->period); $i++) {
                        $name[] = $request->name[$i];
                        $unit[] = $request->unit[$i];
                        $target[] = $request->target[$i];
                        $measurement[] = $request->measurement[$i];
                        $period[] = $request->period[$i];
                        Project_performane::create([
                            "name" => $name[$i],
                            "period" => $period[$i],
                            "unit" => $unit[$i],
                            "target" => $target[$i],
                            "measurement" => $measurement[$i],
                            "project_id" => $id,
                        ]);
                    }
                    $owner_id = $id;
                    return redirect()->route('viewProject', ['id' => $owner_id])->with(['success' => 'تم الحفظ مؤشرات أداء المشروع بنجاح']);
                    break;
            }
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    public function update(Request $request, string $id)
    {
        try {
            $form = $request['formType'];
            switch ($form) {
                case 'initial':
                    Project_owner::where('id', $id)->update([
                        "name" => $request['name'],
                        "nid" => $request['nid'],
                        "email" => $request['email'],
                        "phone" => $request['phone'],
                        "address" => $request['address'],

                        "state" => 2,
                    ]);
                    return redirect()->route('viewProject')->with('menu1_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات رائدة الأعمال بنجاح']);
                    break;
                case 'projectInitial':
                    Project::where('id', $id)->update([
                        "name" => $request['name'],
                        "type_id" => $request['type_id'],
                        "city_id" => $request['city_id'],
                        "idea" => $request['idea'],
                        "goal" => $request['goal'],
                        "fund" => $request['fund'],
                        "innovation" => $request['innovation'],
                        "future" => $request['future'],
                        "location" => $request['location'],
                        "smart" => $request['smart'],
                        "trail" => $request['trail'],
                        "email" => $request['email'],
                        "date" => $request['date'],
                    ]);
                    return redirect()->route('viewProject')->with('menu2_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات المشروع بنجاح']);
                    break;
                case 'projectRisk':
                    Project_risk::where('id', $id)->update([
                        "name" => $request['name'],
                        "degree" => $request['degree'],
                        "possibility" => $request['possibility'],
                        "evaluation" => ($request['degree'] * $request['possibility']),
                        "procedures" => $request['procedures'],
                    ]);
                    return redirect()->route('viewProject')->with('drasa_active', true)->with('active', true)->with(['success' => 'تم الحفظ المخاطر المحتملة للمشروع الأعمال بنجاح']);
                    break;
                case 'projectStudy':
                    Project_study::where('id', $id)->update([
                        "recommendation" => $request['recommendation'],
                        "finance" => $request['finance'],
                        "technical" => $request['technical'],
                        "competitive" => $request['competitive'],
                        "market" => $request['market'],
                    ]);
                    return redirect()->route('viewProject')->with('plan_active', true)->with('active', true)->with(['success' => 'تم الحفظ  دراسة جدوى المشروع الأعمال بنجاح']);
                    break;
                case 'projectPlan':
                    $name = $request->name;
                    $start_date = $request->start_date;
                    $end_date = $request->end_date;
                    $responsible = $request->responsible;
                    $follower = $request->follower;
                    Project_Plan::where('id', $id)->update([
                        "name" => $name,
                        "start_date" => $start_date,
                        "end_date" => $end_date,
                        "responsible" => $responsible,
                        "follower" => $follower,
                    ]);
                    return redirect()->route('viewProject')->with('template_active', true)->with('active', true)->with(['success' => 'تم الحفظ  خطة المشروع الأعمال بنجاح']);
                    break;
                case 'workForm':
                    Project_form::where('id', $id)->update([
                        "provided_value" => $request['provided_value'],
                        "customer_categories" => $request['customer_categories'],
                        "project_access" => $request['project_access'],
                        "attract_clients" => $request['attract_clients'],
                        "income_source" => $request['income_source'],
                        "main_resorce" => $request['main_resorce'],
                        "main_activity" => $request['main_activity'],
                        "partners" => $request['partners'],
                        "cost" => $request['cost'],
                    ]);
                    return redirect()->route('viewProject')->with('mosher_active', true)->with('active', true)->with(['success' => 'تم الحفظ  نموذج العمل الأعمال بنجاح']);
                    break;
                case 'projectPeroformance':
                    Project_performane::where('id', $id)->update([
                        "name" => $request->name,
                        "period" => $request->unit,
                        "unit" => $request->target,
                        "target" => $request->measurement,
                        "measurement" => $request->period,
                    ]);
                    return redirect()->back()->with(['success' => 'تم الحفظ مؤشرات أداء المشروع بنجاح']);
                    break;
            }
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
    /**
     * course data store
     */
    public function course_register(Request $request, string $id)
    {
        $course = Course::select()->find($id);
        if ($is_register = Course_applicants::select()->where('user_id', Auth()->id())->where('course_id', $id)->first()) {
            return view('site.pages.Course_applicants', compact('course', 'is_register'));
        } else
            return view('site.pages.Course_applicants', compact('course'));
    }
    public function course_register_store(Request $request, string $id)
    {
        try {
            Course_applicants::create([
                "name" => $request['name'],
                "nid" => $request['nid'],
                "email" => $request['email'],
                "mobile" => $request['mobile'],
                "qualification" => $request['qualification'],
                "is_online" => $request['is_online'],
                "course_id" => $id,
                "user_id" => Auth()->id(),
            ]);
            return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد' . $ex]);
        }
    }
}
