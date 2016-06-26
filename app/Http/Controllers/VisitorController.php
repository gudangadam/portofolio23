<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
//use App\Helpers;


class VisitorController extends Controller
{
    public function visitorForm()
    {
    	return view('auth.visitor');
    }

 	public function sendEmail($data, $content)
	{
	    Mail::send($content, $data, function ($message) use ($data) {
	        $message ->to($data['toEmail'], $data['toName'])->subject($data['subject']);

	        if (isset($data['attachment'])) {
	            $message->attachData($data['attachment']['file'], $data['attachment']['name']);
	        };
	    });
	}

    public function register(Request $req)
    {
    	//set variable sign-up 
        $name     		= $req['name'];
        $email    		= $req['email'];
        $phone    		= $req['phone'];
        $occupation     = $req['occupation'];

        //validate data with required
        $status = $this->validate($req, [
        	'email'    => 'required|email',
        	'name'     => 'required',
        	'phone'	   => 'required',
        	'occupation' => 'required',	
        ]);
            //save to variable        
            $visitor           = new \App\visitor();
            $visitor->name 	= $name;
            $visitor->email = $email;
            $visitor->phone	= $phone;
            $visitor->occupation = $occupation;
            $emailAlert = 'adam23rd@gmail.com';
            
            //set array dataEmail for send email
            $data = [
               'fromEmail'			=> $email,
               'toEmail'            => $emailAlert,
               'toName'             => $name,
               'subject'            => 'Konfirmasi Visitor Baru'
            ]; 
           	$this->sendEmail($data,'auth.emails.visitormail');

            //save user to database then redirect to page thanks
            $visitor->save();
            return view('home');   
    }
}
