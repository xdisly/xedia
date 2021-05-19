<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $body = "<p><b>Имя:</b> {$request->input('name')}</p>";
            $body .= "<p><b>Email:</b> {$request->input('email')}</p>";
            $body .= "<p><b>Сообщение:</b><br>" . nl2br($request->input('text'))."</p>";
            Mail::to('contact@xedia.ru')->send(new MailSender($body));
            return view('feedback.success');
        }
        return view('home.contacts');
    }
}
