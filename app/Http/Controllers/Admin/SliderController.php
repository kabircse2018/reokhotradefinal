<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    //


//__Create__//
    public function create()
    {
        return view('admin.slider.create');
    }




//__Store__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'slider_content' => 'required|unique:sliders|max:255',
        ]);

        //photo slug
        $photo_slug = 'k_slider_'. time();

        $slider = new Slider;
        $slider->slider_content = $request->slider_content;
        $slider->slider_content_jpn = $request->slider_content_jpn;

        // //work with image
        $photo = $request->slider_image;
        $photoname = $photo_slug . '.' .$photo->getClientOriginalExtension();
        // $photo->move('public/files/slider/', $photo); //without image Intervention
        Image::make($photo)->save('public/files/slider/original/'. $photoname); //image Intervention
        Image::make($photo)->fit(1200,500)->save('public/files/slider/'. $photoname); //image Intervention
        Image::make($photo)->fit(200,170)->save('public/files/slider/thumbnails/'. $photoname); //image Intervention
        $slider->slider_image = 'public/files/slider/'.$photoname;

        $slider->slider_image_thumbnails = 'public/files/slider/thumbnails/'.$photoname;
        $slider->menu_status = $request->menu_status;

        // dd($slider);
        $slider->save();

        $notification = array('message' => 'Service Inserted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }











}
