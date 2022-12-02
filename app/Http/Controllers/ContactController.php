<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\AntiBot;
use App\Rules\AntiSpam;

class ContactController extends Controller
{

    public function send(Request $request)
    {

        // validate input
        $validator = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required','email:rfc,dns'],
            'message' => 'required',
            'ts' => ['required', new AntiBot],
            'pro' => ['required', new AntiSpam],
        ]);

        $toName = $request->firstname . " " . $request->lastname;
        $toEmail = $request->email;
        $toPhone = $request->phone;
        $message = $request->message;

        if ($request->filled('phone')) {
            $message = "Absender: $toName \nEmail: $toEmail \nTelefon: $toPhone" . "\n\n" . $message;
        } else {
            $message = "Absender: $toName \nEmail: $toEmail" . "\n\n" . $message;
        }

        // Send mail
        Mail::raw($message, function ($message) use ($toName, $toEmail) {
            $message->to(env('MAIL_RECIPIENT'))
              ->subject('Anfrage über das Kontaktformular')
              ->from($toEmail, $toName);
        });


        return redirect()->back()->with('success','Ihre Nachricht wurde erfolgreich verschickt.');
    }
}
