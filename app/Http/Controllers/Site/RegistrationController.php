<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_owner;
use App\Models\Project_risk;
use App\Models\Project_study;
use App\Models\Project_Plan;
use App\Models\Project_form;
use App\Models\User;
use App\Models\Project_performane;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $type = Type::select()->get();
        return view('site.pages.registration', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $type = Type::select()->get();
        return view('site.pages.add_project', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $project = Auth()->id();
            $form = $request['formType'];
            switch ($form) {
                case 'initial':
                    Project_owner::create([
                        "name" => $request['name'],
                        "nid" => $request['nid'],
                        "email" => $request['email'],
                        "phone" => $request['phone'],
                        "address" => $request['address'],
                        "fund" => $request['fund'],
                        "state" => 2,
                        "project_id" => $project,
                        "user_id" => $project,

                    ]);

                    return redirect()->back()->with('menu1_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات رائدة الأعمال بنجاح']);
                    break;
                case 'projectInitial':
                    Project::create([
                        "name" => $request['name'],
                        "category" => $request['category'],
                        "idea" => $request['idea'],
                        "goal" => $request['goal'],
                        "innovation" => $request['innovation'],
                        "future" => $request['future'],
                        "location" => $request['location'],
                        "smart" => $request['smart'],
                        "trail" => $request['trail'],
                        "email" => $request['email'],
                        "date" => $request['date'],
                        "owner_id" => $project,
                        "user_id" => $project,

                    ]);
                    return redirect()->back()->with('menu2_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات المشروع بنجاح']);
                    break;
                case 'projectRisk':
                    Project_risk::create([
                        "name" => $request['name'],
                        "degree" => $request['degree'],
                        "possibility" => $request['possibility'],
                        "evaluation" => ($request['degree'] * $request['possibility']),
                        "procedures" => $request['procedures'],
                        "project_id" => $project,
                        "user_id" => $project,
                    ]);
                    return redirect()->back()->with('drasa_active', true)->with('active', true)->with(['success' => 'تم الحفظ المخاطر المحتملة للمشروع الأعمال بنجاح']);
                    break;
                case 'projectStudy':
                    Project_study::create([
                        "recommendation" => $request['recommendation'],
                        "finance" => $request['finance'],
                        "technical" => $request['technical'],
                        "competitive" => $request['competitive'],
                        "market" => $request['market'],
                        "project_id" => $project,
                        "user_id" => $project,
                    ]);
                    return redirect()->back()->with('plan_active', true)->with('active', true)->with(['success' => 'تم الحفظ  دراسة جدوى المشروع الأعمال بنجاح']);
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
                            "project_id" => $project,
                            "user_id" => $project,
                        ]);
                    }
                    return redirect()->back()->with('template_active', true)->with('active', true)->with(['success' => 'تم الحفظ  خطة المشروع الأعمال بنجاح']);
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
                        "project_id" => $project,
                        "user_id" => $project,
                    ]);
                    return redirect()->back()->with('mosher_active', true)->with('active', true)->with(['success' => 'تم الحفظ  نموذج العمل الأعمال بنجاح']);
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
                            "project_id" => $project,
                            "user_id" => $project,
                        ]);
                    }
                    return redirect()->back()->with(['success' => 'تم الحفظ مؤشرات أداء المشروع بنجاح']);
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
                        "fund" => $request['fund'],
                        "state" => 2,
                    ]);
                    return redirect()->route('viewProject')->with('menu1_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات رائدة الأعمال بنجاح']);
                    break;
                case 'projectInitial':
                    Project::where('id', $id)->update([
                        "name" => $request['name'],
                        "category" => $request['category'],
                        "idea" => $request['idea'],
                        "goal" => $request['goal'],
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
