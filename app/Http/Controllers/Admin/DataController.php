<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $openData = Data::select()->get();
        return view('admin.pages.data', compact('openData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.datacreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //
            $file = [];
            if ($files = $request->file('file')) {
                foreach ($files as $file) {
                    $ext = strtolower($file->getClientOriginalName());
                    $file_name = time() . '.' . $ext;
                    $path = 'images/data';
                    $file->move($path, $file_name);
                    $upload[] = $file_name;
                }
            } else {
                $upload[] = '';
            }

            Data::create([
                "name" => $request['name'],
                "type" => $request['type'],
                "date" => $request['date'],
                "file" => implode('|', $upload),

            ]);
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
        $data = Data::select()->find($id);
        return view('admin.pages.data_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $file = [];
            if ($files = $request->file('file')) {
                foreach ($files as $file) {
                    $ext = strtolower($file->getClientOriginalName());
                    $file_name = time() . '.' . $ext;
                    $path = 'images/data';
                    $file->move($path, $file_name);
                    $upload[] = $file_name;
                }
            } else {
                $upload[] = '';
            }
            $data = Data::where('id', $id)->update([
                "name" => $request['name'],
                "type" => $request['type'],
                "date" => $request['date'],
                "file" => implode('|', $upload),
            ]);
            return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Data::find($id);
        $data->delete();
        return redirect()->back()->with(['success' => 'تم الحذف بنجاح']);
    }
}
