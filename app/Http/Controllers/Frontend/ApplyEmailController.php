<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ApplyMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ApplyEmailController extends Controller
{
    //Apply Email Get Data
    public function applyEmail(Request $request)
    {

        $applydata = [
            'fname'         => $request->fname,
            'lname'         => $request->lname,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'destination'   => $request->destination,
            'course'        => $request->course,
            'subject'       => $request->subject,
            'message'       => $request->message,
        ];
       

        Mail::to('nihongo@reokhotrade.com')->send(new ApplyMail($applydata));
        return back()->with('message_sent', 'Your message has dent been successfuly');
    }
}

