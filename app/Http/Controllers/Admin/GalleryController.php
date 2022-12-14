<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{

//__Index__//
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }


//__create__//
    public function create()
    {
        return view('admin.gallery.create');
    }



//__Store__//
    public function store(Request $request)
    {
    $validated = $request->validate([
        'gallery_name' => 'required|unique:galleries|max:255',
    ]);

    //photo slug
    $photo_slug = Str::of($request->gallery_name)->slug('-');

    $blog = new Gallery;
    $blog->gallery_name = $request->gallery_name;
    $blog->gallery_name_jpn = $request->gallery_name_jpn;
    $blog->gallery_slug = Str::of($request->gallery_slug)->slug('-');
    $blog->gallery_description = $request->gallery_description;
    $blog->gallery_description_jpn = $request->gallery_description_jpn;

    // //work with image
    $photo = $request->gallery_image;
    $photoname = $photo_slug . '.' .$photo->getClientOriginalExtension();

    // $photo->move('public/files/galleries/', $photo); //without image Intervention
    Image::make($photo)->save('public/files/galleries/original/'. $photoname); //image Intervention
    Image::make($photo)->fit(800,450)->save('public/files/galleries/'. $photoname); //image Intervention
    Image::make($photo)->fit(200,170)->save('public/files/galleries/thumbnails/'. $photoname); //image Intervention
    $blog->gallery_image = 'public/files/galleries/'.$photoname;

    $blog->gallery_image_thumbnails = 'public/files/galleries/thumbnails/'.$photoname;

    $blog->gallery_meta_name = $request->gallery_meta_name;
    $blog->gallery_meta_keyword = $request->gallery_meta_keyword;
    $blog->gallery_meta_description = $request->gallery_meta_description;
    $blog->menu_status = $request->menu_status;
    $blog->created_by = Auth::user()->id;

    $blog->save();

    $notification = array('message' => 'Gallery Inserted Successfully', 'alert-type' => 'success');
    return redirect()->back()->with($notification);

    }




}
