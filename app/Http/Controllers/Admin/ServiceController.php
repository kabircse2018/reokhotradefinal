<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class ServiceController extends Controller
{

//__Index__//
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }


//__create__//
    public function create()
    {
        return view('admin.service.create');
    }



//__Store__//
public function store(Request $request)
{
    $validated = $request->validate([
        'service_name' => 'required|unique:services|max:255',
    ]);

    //photo slug
    $photo_slug = Str::of($request->service_name)->slug('-');

    $blog = new Service;
    $blog->service_name = $request->service_name;
    $blog->service_name_jpn = $request->service_name_jpn;
    $blog->service_slug = Str::of($request->service_slug)->slug('-');
    $blog->service_description = $request->service_description;
    $blog->service_description_jpn = $request->service_description_jpn;

    // //work with image
    $photo = $request->service_image;
    $photoname = $photo_slug . '.' .$photo->getClientOriginalExtension();
    // $photo->move('public/files/services/', $photo); //without image Intervention
    Image::make($photo)->save('public/files/services/original/'. $photoname); //image Intervention
    Image::make($photo)->fit(800,450)->save('public/files/services/'. $photoname); //image Intervention
    Image::make($photo)->fit(200,170)->save('public/files/services/thumbnails/'. $photoname); //image Intervention
    $blog->service_image = 'public/files/services/'.$photoname;

    $blog->service_image_thumbnails = 'public/files/services/thumbnails/'.$photoname;

    $blog->service_meta_name = $request->service_meta_name;
    $blog->service_meta_keyword = $request->service_meta_keyword;
    $blog->service_meta_description = $request->service_meta_description;
    $blog->menu_status = $request->menu_status;
    $blog->created_by = Auth::user()->id;

    // dd($blog);
    $blog->save();

    $notification = array('message' => 'Service Inserted Successfully', 'alert-type' => 'success');
    return redirect()->back()->with($notification);

}











}
