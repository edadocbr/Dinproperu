<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validamos los datos
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Guardamos los datos en un array
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Enviamos el email
        Mail::to('ventas@dinproperu.com')->queue(new ContactMail($data));

        // Redirigimos con un mensaje de éxito
        return back()->with('success', 'Tu mensaje ha sido enviado.'); 
    }
}
