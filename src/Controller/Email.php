<?php

namespace App\Http\Controllers;

use App\Mail\Email as MailEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
    public function sendEmail()
    {
        $email = new MailEmail(user: 'Paco', product: 'Ringo', enterprise: 'Siigo');
        Mail::to('example@gmail.com')->send($email);
        return "Success";
    }
}
