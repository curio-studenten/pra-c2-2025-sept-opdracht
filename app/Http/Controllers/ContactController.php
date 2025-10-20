<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // save form to  .txt file
        $file = storage_path('app/public/contact_messages.txt');
        $current = file_get_contents($file);
        $current .= "Name: " . $validated['name'] . "\n";
        $current .= "Email: " . $validated['email'] . "\n";
        $current .= "Message: " . $validated['message'] . "\n";
        $current .= "-------------------------\n";
        file_put_contents($file, $current);


        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
