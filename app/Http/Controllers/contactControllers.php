<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Kirim email atau simpan data ke database, dsb.
        // Contoh: mengirim email
        Mail::send('emails.contact', $validated, function ($message) use ($validated) {
            $message->to('info@dmiehan.com')
                ->subject('Pesan Baru dari ' . $validated['name']);
        });

        // Redirect dengan pesan sukses
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
