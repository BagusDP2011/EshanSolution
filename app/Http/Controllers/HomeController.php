<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function kontak(Request $request)
    {
        return view('Kontak');
    }
    
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Kirim email (opsional)
        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to('info@cctvcompany.com')
                ->subject('Pesan dari ' . $request->name)
                ->replyTo($request->email);
        });

        return back()->with('success', 'Pesan Anda telah dikirim!');
    }
}
