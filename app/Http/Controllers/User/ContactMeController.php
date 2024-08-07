<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ContactPageSettingInterface;
use App\Interfaces\MessageInterface;

use Illuminate\Http\Request;

class ContactMeController extends Controller
{

    private $message;
    private $contact;

    public function __construct(ContactPageSettingInterface $contact, MessageInterface $message)
    {
        $this->contact = $contact;
        $this->message = $message;
    
    }

    public function index()
    {
        return view('user.contact_me.index', [
            'contact' => $this->contact->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => ['required'],
            'email'   => ['required', 'email'],
            'message' => ['required']
        ]);

        try {
            $this->message->store($request->all());
            return redirect()->route('contact-me.index')->with('success', 'Message has been sent successfully');
        } catch (\Throwable $th) {
            return redirect()->route('contact-me.index')->with('error', 'Message failed to send');
        }
    }
}
