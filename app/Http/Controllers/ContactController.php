<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm() {
        return view('contact');
    }

    public function submitForm(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        Contact::create($request->all());
        return back()->with('success', 'Message sent successfully!');
    }
}
