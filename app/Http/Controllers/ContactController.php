<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('include/views/contact');
    }

    public function query(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        Contact::create([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        return view('index');
    }
}
