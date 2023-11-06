<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Mail\ContactUsReceived;
use Illuminate\Support\Facades\Mail;

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
        $contact = Contact::create($validated);
        if ($contact) {
            try {
                $admin_email = "khadkaaditya983@gmail.com";
                Mail::to($contact->email)
                    ->send(new ContactUsMail($contact));

                if (!empty($admin_email)) {
                    Mail::to($admin_email)
                        ->send(new ContactUsReceived($contact));
                }
            } catch (\Exception $e) {
                return response()->json(['error' => 'Something went wrong!']);
            }
        }


        //return response success json 

        return response()->json(['success' => 'Form is successfully submitted!']);

        // return json(['message' => 'Contact saved successfully.']);
    }
}
