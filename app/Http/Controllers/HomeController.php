<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function contact(Request $request) {
        $request->validate([
            "name" => "required|max:200|string",
            "email" => "required|max:200|email",
            "subject" => "required|max:255|string",
            "message" => "required|max:255|string",
        ]);


        Mail::to("marouanesouah@gmail.com")->send(new ContactMail($request->all()));
       
        return redirect()->back()->with([
            'MailSuccess'   =>  true,
       ]);
    }
}
