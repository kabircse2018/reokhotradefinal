<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
 

    public function sendEmail(Request $request){
        $details = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('nihongo@reokhotrade.com')->send(new ContactMail($details));
        return back()->with('mesasge_sent', 'Your message has dent been successfuly');
    }




}
