<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
    /*    $validation = $request->validate([
            'subject'  => 'required|min:5|max:50',
            'message' => 'required'
        ]);*/
        $contact = new Contact();
        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()
                ->route('home')
                ->with('success', 'Сообщение было добавлено!');
    }
}
