<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contactNumber' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Create a new enquiry record
        Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'contactNumber' => $request->contactNumber,
            'message' => $request->message,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
    }
}
