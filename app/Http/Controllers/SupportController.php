<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function send(Request $request)
    {
        $user = auth()->user();
        $subject = $request->subject;
        $msg = $request->message;

        if ($msg == "" || $subject == "") {
            return back()->with(['alert' => 'Please make sure fill out subject and message.', 'alert_type' => 'error'])->withInput($request->all());
        }

        Mail::send('mail.support', compact('user', 'msg'), function ($mail) use ($user, $subject) {
            $mail->from($user->email, $user->name);
            $mail->to('support@weteach.io')->subject('New Support Inquires - ' . $subject);
        });

        return back()->with(['alert' => 'Successfully sent your request. Please allow up to 24-48 hours to response.', 'alert_type' => 'success']);
    }
}