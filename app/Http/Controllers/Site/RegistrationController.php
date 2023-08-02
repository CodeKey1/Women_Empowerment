<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

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
        $form = $request['formType'];
        switch($form){
            case 'initial':
                break;
            case 'projectInitial':
                break;
            case 'projectRisk':
                break;
            case 'projectStudy':
                break;
            case 'projectPlan':
                break;
            case 'workForm':
                break;
            case 'projectPeroformance':
                break;     
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
