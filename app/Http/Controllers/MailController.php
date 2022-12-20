<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class MailController extends Controller
{
    public function grant($id){
        $data=User::find($id);
        $abc=['name'=>"$data->name",
                'email'=>"$data->email",
            ];
        $user['to']=[
            $data->email,
             ];
        Mail::send('mail.GrantMail',$abc, function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject('Book Request Grant');
        });
        return back()->with('message', 'Send Invitation Succesfully');
    }
    public function Askforreturn($id){
        $data=User::find($id);
        $abc=['name'=>"$data->name",
                'email'=>"$data->email",
            ];
        $user['to']=[
            $data->email,
             ];
        Mail::send('mail.AskforReturn',$abc, function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject('Book Return Request');
        });
        return back()->with('message', 'Book Return Request Send Succesfully');
    }
}
