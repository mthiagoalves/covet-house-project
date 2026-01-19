<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function generalDownload(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'country' => 'required|string',
            'privacy_policy' => 'nullable|accepted',
        ]);

        return back()->with('success', 'Thank you! Your download will start automatically.');
    }
}
