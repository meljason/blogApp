<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    //controller function to create the contact message
    public function create()
    {
        return view('pages.contact');
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //send the email -- use library Mail
        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('hospitalhumber@gmail.com')->subject('Contact Message');

        });

        return redirect()->back()->with('flash_message', 'Thank you for your message.');

    }

}
