<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('public.contact.index');
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phoneno' => 'nullable',
            'subject' => 'required',
            'message' => 'required',
            'captcha' => 'captcha'
        ]);

        Contact::create($validated);

        //return response success json 

        return response()->json(['success' => 'Form is successfully submitted!']);

        // return json(['message' => 'Contact saved successfully.']);
    }
}
