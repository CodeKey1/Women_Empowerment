<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide_Women;
use App\Models\Project;
use App\Models\Project_risk;
use App\Models\Project_study;
use App\Models\Project_performane;
use App\Models\Mobadrat;
use App\Models\Project_form;
use App\Models\Project_owner;
use App\Models\Project_plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profile()
    {
        //Auth()->id()
        $project = Project::select()->where('user_id', Auth()->id())->get();
        $apply = Project_owner::select()->where('user_id', Auth()->id())->get();
        return view('site.pages.dashboard', compact('apply', 'project'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apply = Project_owner::select()->get();
        return view('admin.pages.apply.all_apply', compact('apply'));
    }

    public function mopdara()
    {
        //
        $mopadra = Mobadrat::select()->get();
        return view('admin.pages.mopadra', compact('mopadra'));
    }
    public function mopdara_create()
    {
        return view('admin.pages.mopadracreate');
    }
    public function mopdara_edit(String $id)
    {
        $mopdara = Mobadrat::select()->find($id);
        return view('admin.pages.mopadraedit', compact('mopdara'));
    }
    public function mopdara_store(Request $request)
    {
        Mobadrat::create([
            "name" => $request['name'],
            "description" => $request['details'],
        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }
    public function mopdara_update(Request $request, string $id)
    {
        Mobadrat::where('id', $id)->update([
            "name" => $request['name'],
            "description" => $request['details'],
        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }
    public function mopdara_delete(string $id)
    {
        $course = Mobadrat::find($id);
        $course->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }

    public function ershadat()
    {
        //
        $ershadat = Guide_Women::select()->get();
        return view('admin.pages.ershadat', compact('ershadat'));
    }
    public function ershadat_create()
    {
        return view('admin.pages.ershadatcreate');
    }
    public function ershadat_edit(String $id)
    {
        $ershadat = Guide_Women::select()->find($id);
        return view('admin.pages.ershadatedit', compact('ershadat'));
    }
    public function ershadat_store(Request $request)
    {
        Guide_Women::create([
            "name" => $request['name'],
            "description" => $request['details'],
        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }
    public function ershadat_update(Request $request, string $id)
    {
        Guide_Women::where('id', $id)->update([
            "name" => $request['name'],
            "description" => $request['details'],
        ]);
        return redirect()->back()->with(['success' => 'تم الحفظ بنجاح']);
    }
    public function ershadat_delete(string $id)
    {
        $course = Guide_Women::find($id);
        $course->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $apply = Project_owner::select()->where('user_id', $id)->get();
        $apply1 = Project::select()->where('user_id', $id)->get();
        $apply3 = Project_study::select()->where('user_id', $id)->get();
        $apply2 = Project_risk::select()->where('user_id', $id)->get();
        $apply4 =  Project_form::select()->where('user_id', $id)->get();
        $apply5 = Project_plan::select()->where('user_id', $id)->get();
        $apply6 = Project_performane::select()->where('user_id', $id)->get();
        return view('admin.pages.apply.view', compact('apply', 'apply1', 'apply2', 'apply3', 'apply4', 'apply5', 'apply6'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
