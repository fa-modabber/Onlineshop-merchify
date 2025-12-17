<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $messages = ContactUs::all();
        return view('Admin.contacts.index', compact('messages'));
    }

    public function show(ContactUs $contact)
    {
        $message = $contact;
        return view('Admin.contacts.show', compact('message'));
    }

    public function destroy(ContactUs $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact-us.index')->with('warning', 'پیام با موفقیت حذف شد');
    }
}
