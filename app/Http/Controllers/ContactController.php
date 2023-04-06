<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {
        $contact = new Contact();
        $contact->fullname = $request->input('fullname');
        $contact->email = $request->input('email');
        $contact->email_subject = $request->input('email_subject');
        $contact->mobile = $request->input('mobile');
        $contact->message = $request->input('message');
     
        $contact->save();
        return redirect()->route('contact')->with('success', 'Сообщение было добавлено');
    }

    // Валидация
    
    // public function submit(Request $request) {
    //     $validation = $request->validate([
    //         "fullname" => 'required|min:5|max:50',
    //         "email" => 'required|email:rfc,dns',
    //         "email_subject" => 'required',
    //         "mobile" => 'required',
    //         "message" => 'required'
    //     ]);
    // }
}
