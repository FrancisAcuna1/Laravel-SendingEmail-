<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SampleMail;  
use Mail;   


class MailController extends Controller
{

    public function send_email(Request $request)
    {
        $request->validate([
            'attachment' => 'file|max:10240',
        ]);

        $mailData = array(      
        'firstname' => $request->input('firstname'),   
        'lastname' => $request->input('lastname'),    
        'email' =>  $request->input('email'),
        'file' => $request->file('attachment'), 
        'message' => $request->input('message'),
        );
        
        Mail::to($request->input('email'))->send(new SampleMail($mailData));
        return redirect('success');
    }

    public function sendticket()
    {
        return view('form-page');
    }

    public function success()
    {
        return view('success-page');
    }

    public function back()
    {
        return view('form-page');
    }
}
