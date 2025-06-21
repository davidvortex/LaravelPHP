<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostMail;

class EmailController extends Controller
{
    public function create()
    {
        return view('emails.create');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'asunto' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        $postData = [
            'titulo' => $request->input('asunto'),
            'contenido' => $request->input('mensaje'),
        ];

        Mail::to($request->input('email'))->send(new PostMail($postData));

        return back()->with('success', 'Correo enviado exitosamente');
    }
}

