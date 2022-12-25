<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
   
    //__Index__//
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }


//__create__//
    public function create()
    {
        return view('admin.blog.create');
    }



//__Store__//
    public function store(Request $request)
    {
    $validated = $request->validate([
        'blog_name' => 'required|unique:blogs|max:255',
    ]);

    //photo slug
    $photo_slug = Str::of($request->blog_name)->slug('-');

    $blog = new Blog;
    $blog->blog_name = $request->blog_name;
    $blog->blog_name_jpn = $request->blog_name_jpn;
    $blog->blog_slug = Str::of($request->blog_name)->slug('-');
    $blog->blog_description = $request->blog_description;
    $blog->blog_description_jpn = $request->blog_description_jpn;

    // //work with image
    $photo = $request->blog_image;
    $photoname = $photo_slug . '.' .$photo->getClientOriginalExtension();

    // $photo->move('public/files/galleries/', $photo); //without image Intervention
    // Image::make($photo)->save('public/files/blog/original/'. $photoname); //image Intervention
    Image::make($photo)->fit(800,800)->save('public/files/blog/'. $photoname); //image Intervention
    Image::make($photo)->fit(200,170)->save('public/files/blog/thumbnails/'. $photoname); //image Intervention
    $blog->blog_image = 'public/files/blog/'.$photoname;

    $blog->blog_image_thumbnails = 'public/files/blog/thumbnails/'.$photoname;

    $blog->blog_meta_name = $request->blog_meta_name;
    $blog->blog_meta_keyword = $request->blog_meta_keyword;
    $blog->blog_meta_description = $request->blog_meta_description;
    $blog->menu_status = $request->menu_status;
    $blog->created_by = Auth::user()->id;

    $blog->save();

    $notification = array('message' => 'Blog Inserted Successfully', 'alert-type' => 'success');
    return redirect()->back()->with($notification);

    }



//__DELETE__//
public function delete($id)
{
    $blog = Blog::find($id);
    $blog->delete();

    $notification = array('message' => 'Blog Deleted Successfully', 'alert-type' => 'success');
    return redirect()->back()->with($notification);
}    


}
