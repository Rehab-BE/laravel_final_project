<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('public.contact');
    }
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50',
            'subject' => 'required|string|max:50',
            'message' => 'required|string|max:255',
        ]);

        Contact::create($data);
        Mail::to('rehabadal202@gmail.com')->send(new ContactMail($data));

        return redirect()->back();
    }
}
