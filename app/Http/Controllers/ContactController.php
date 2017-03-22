<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mail(Request $request)
    {
        $content = [
        	'message' => $request->message,
        	'name' => $request->name,
	        'email' => $request->email
        ];        

        Mail::to(env('MAIL_TO_ADDRESS'))
            ->cc(env('MAIL_CC_ADDRESS'))
            ->send(new Contact($content));

        return redirect('/');
    }
}
