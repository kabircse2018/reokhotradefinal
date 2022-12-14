<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\About;
use App\Models\Slider;
use App\Models\Gallery;
use Illuminate\Http\Request;

use App\Models\Studysubcategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{

//__Index Controller__//
    public function index()
    {

        $slider = Slider::orderBy('id', 'desc')->first();
        $sliders = DB::table('sliders')->where('menu_status', '0')->get();
        $StudyAbroadView = Studysubcategory::all()->where('menu_status','1');
        return view('frontend.index', compact('slider','sliders','StudyAbroadView'));
    }


    

//__apply Controller__//
    public function apply()
    {
       return view('frontend.apply.index');
    }



//__galleryView Controller__//
    public function galleryView()
    {
        $gallery = Gallery::all();
        return view('frontend.gallery.index', compact('gallery'));
    }



//__aboutView Controller__//
    public function aboutView()
    {
        $about = About::first();
        return view('frontend.about.index', compact('about'));
    }



//__studtcategoryView Controller__//
    public function studycategoryView($cate_slug)
    {
        $Studysubcategory = Studysubcategory::where('studysubcategory_slug', $cate_slug)->where('menu_status', '1')->first();
        return view('frontend.studycategory.index', compact('Studysubcategory'));
    }



//__blogView Controller__//
    public function blogView()
    {
        $blogs = Blog::all();
        return view('frontend.blog.index', compact('blogs'));

    }


//__blogView Controller__//
    public function blogSingleView($id)
    {
        $blogs = Blog::find($id);
        return view('frontend.blog.single', compact('blogs'));

    }

 
//__Course
    public function course()
    {
        return view('frontend.course.index');
    }    
 
//__contact
    public function contact()
    {   
        return view('frontend.contact.index');
    }    
    
    
    public function english()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang','english');
        return redirect()->back();
    }
    
    
    public function japan()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang','japan');
        return redirect()->back();
    }
















}
