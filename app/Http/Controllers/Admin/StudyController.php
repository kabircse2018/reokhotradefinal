<?php

namespace App\Http\Controllers\Admin;

use App\Models\Study;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudyController extends Controller
{

//__Index__//
    public function index()
    {
        $studies = Study::all();
        return view('admin.study.index', compact('studies'));
    }


//__Create__//
    public function create()
    {
        return view('admin.study.create');
    }


//__Store__//
    public function store(Request $request)
    {
    $validated = $request->validate([
        'study_name' => 'required|unique:studies|max:255',
    ]);

    $study = new Study;
    $study->study_name = $request->study_name;
    $study->study_name_jpn = $request->study_name_jpn;
    $study->study_slug = Str::of($request->study_slug)->slug('-');

    $study->study_meta_name = $request->study_meta_name;
    $study->study_meta_keyword = $request->study_meta_keyword;
    $study->study_meta_description = $request->study_meta_description;
    $study->menu_status = $request->menu_status;
    $study->created_by = Auth::user()->id;
    $study->save();

    $notification = array('message' => 'study Inserted Successfully', 'alert-type' => 'success');
    return redirect()->back()->with($notification);

    }





}
