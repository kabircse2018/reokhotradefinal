<?php

namespace App\Http\Controllers\Admin;

use App\Models\Study;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Studysubcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class StudysubcategoryController extends Controller
{
    //

    public function index()
    {   
        $studysubcategories = Studysubcategory::all();
        return view('admin.study.studysubcategory.index', compact('studysubcategories'));
    }


//__Create studysubcategory__//
    public function create()
    {
        $study = Study::all();
        return view('admin.study.studysubcategory.create', compact('study'));
    }



//__Store__//
    public function store(Request $request)
    {
    $validated = $request->validate([
        'studysubcategory_name' => 'required|unique:studysubcategories|max:255',
    ]);

    //photo slug
    $photo_slug = Str::of($request->studysubcategory_name)->slug('-');

    $studysubcategory = new Studysubcategory;
    $studysubcategory->study_id = $request->study_id;
    $studysubcategory->studysubcategory_name = $request->studysubcategory_name;
    $studysubcategory->studysubcategory_name_jpn = $request->studysubcategory_name_jpn;
    $studysubcategory->studysubcategory_slug = Str::of($request->studysubcategory_name)->slug('-');
    $studysubcategory->studysubcategory_description = $request->studysubcategory_description;
    $studysubcategory->studysubcategory_description_jpn = $request->studysubcategory_description_jpn;

    // //work with image
    $photo = $request->studysubcategory_image;
    $photoname = $photo_slug . '.' .$photo->getClientOriginalExtension();

    // $photo->move('public/files/studysubcategories/', $photo); //without image Intervention
    Image::make($photo)->save('public/files/studysubcategories/original/'. $photoname); //image Intervention
    Image::make($photo)->fit(800,450)->save('public/files/studysubcategories/'. $photoname); //image Intervention
    Image::make($photo)->fit(200,170)->save('public/files/studysubcategories/thumbnails/'. $photoname); //image Intervention
    $studysubcategory->studysubcategory_image = 'public/files/studysubcategories/'.$photoname;

    $studysubcategory->studysubcategory_image_thumbnails = 'public/files/studysubcategories/thumbnails/'.$photoname;

    $studysubcategory->studysubcategory_meta_name = $request->studysubcategory_meta_name;
    $studysubcategory->studysubcategory_meta_keyword = $request->studysubcategory_meta_keyword;
    $studysubcategory->studysubcategory_meta_description = $request->studysubcategory_meta_description;
    $studysubcategory->menu_status = $request->menu_status;
    $studysubcategory->created_by = Auth::user()->id;
    // dd($studysubcategory);
    $studysubcategory->save();

    $notification = array('message' => 'Gallery Inserted Successfully', 'alert-type' => 'success');
    return redirect()->back()->with($notification);

    }







}
