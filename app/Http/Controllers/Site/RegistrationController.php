<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
        $type = Type::select()->get();
        if (Project_owner::where('user_id', Auth::user()->id)->exists('user_id')) {
            $owner_id = Project_owner::where('user_id', Auth::user()->id)->first();
            return view('site.registration', compact('type', 'owner_id'));
        }
        return view('site.registration', compact('type'));
    }

    public function create_project(string $id)
    {
        //
        $owner_id = $id;
        $type = Type::select()->get();
        return view('site.pages.add_project', compact('type', 'owner_id'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function Initial_store(Request $request)
    {
        $project = Auth()->id();
        $owner_id = Project_owner::create([
            "name" => $request['name'],
            "nid" => $request['nid'],
            "email" => $request['email'],
            "phone" => $request['phone'],
            "address" => $request['address'],
            "fund" => $request['fund'],
            "state" => 2,
            "user_id" => $project,
        ]);
        $owner_id = $owner_id->id;
        return redirect()->back()->with('menu1_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات رائدة الأعمال بنجاح']);
    }

    public function project_store(Request $request, string $id)
    {
        $project = Project::create([
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
            "owner_id" => $id,
        ]);
        $owner_id = $project->id;
        return redirect()->route('project.data', ['id' => $owner_id])->with('menu2_active', true)->with('active', true)->with(['success' => 'تم الحفظ بيانات المشروع بنجاح']);
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
        // try {
            Project_owner::where('id', $id)->update([
                "name" => $request['name'],
                "nid" => $request['nid'],
                "email" => $request['email'],
                "phone" => $request['phone'],
                "address" => $request['address'],
                "fund" => $request['fund'],

            ]);
            //return redirect()->route('viewProject')->with('menu1_active', true)->with('active', true)->with(['success' => 'تم تعديل بيانات رائدة الأعمال بنجاح']);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        // } catch (\Exception $ex) {
        //     return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        // }
    }
    // public function storePass(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email',
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     // Here we will attempt to reset the user's password. If it is successful we
    //     // will update the password on an actual user model and persist it to the
    //     // database. Otherwise we will parse the error and return the response.
    //     $status = Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user) use ($request) {
    //             $user->forceFill([
    //                 'password' => Hash::make($request->password),
    //                 'remember_token' => Str::random(60),
    //             ])->save();

    //             event(new PasswordReset($user));
    //         }
    //     );

    //     // If the password was successfully reset, we will redirect the user back to
    //     // the application's home authenticated view. If there is an error we can
    //     // redirect them back to where they came from with their error message.
    //     if ($status == Password::PASSWORD_RESET) {
    //         return redirect()->route('login')->with('status', __($status));
    //     }

    //     throw ValidationException::withMessages([
    //         'email' => [trans($status)],
    //     ]);
    // }
}
