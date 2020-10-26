<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        return "Welcome to our homepage";
    }
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

    public function allData()
    {
        $contact = new Contact();
        return view("messages", ['data' => $contact->all()]);
        //return view("messages", ['data' => $contact->where('id', '=', 1)->get()]);
    }
    public function showOneMessage(int $id)
    {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage(int $id)
    {
        $contact = new Contact();
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit(int $id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->route('contact-data-one', $id)
            ->with('success', 'Сообщение было обновлено!');
    }

    public function deleteMessage(int $id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')
            ->with('success', 'Сообщение было удалено!');
    }
}
