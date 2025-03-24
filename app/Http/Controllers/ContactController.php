<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    public function sendEmail(Request $request)
{
    Log::info('Email submission received', $request->all());

    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'emailMessage' => 'required|string',
        ]);
        
        // Proses pengiriman email
        Mail::to('bm1oil.hosting@gmail.com')->send(new Email(
            $validated['name'],       // nama pengirim
            $validated['email'],      // email pengirim
            $validated['subject'],    // subjek email
            $validated['emailMessage']     // pesan email
        ));
        
        Log::info('Email sent successfully');
        
        return response()->json(['status' => 'OK']);
    } catch (\Exception $e) {
        Log::error('Error sending email: ' . $e->getMessage());
        return response()->json(['status' => 'Error', 'message' => $e->getMessage()]);
    }
}
}
