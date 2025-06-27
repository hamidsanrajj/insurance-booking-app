<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function quote(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $service = $request->input('service');

        Quote::create([
            'name' => $name,
            'email' => $email,
            'service' => $service,
        ]);

        return view('include/views/insurance/insurance');
    }
}
