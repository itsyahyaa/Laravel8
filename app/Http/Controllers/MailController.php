<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // send mail
    public function sendEmail(){
        $details = [
            'title'=> 'Mail from Yahya Media',
            'body' => 'This is for testing mail using gmail'
        ];
        Mail::to("jimcalecollection@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
