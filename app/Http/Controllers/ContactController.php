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

        Mail::to('dave@jiff.ie')
            ->bcc('bcc@jiff.ie')
            ->send(new Contact($content));

        return response()->json(['message' => 'Request completed']);
    }
}
