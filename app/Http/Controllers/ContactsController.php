<?php

namespace App\Http\Controllers;

use App\Mail\EmailSent;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    function index(Request $request)
    {
        if($request->all()) {
            $validation = Validator::make($request->all(), [
                'fullname' => 'required|string|min:3|max:255',
                'email' => 'required|string|email|min:5|max:255',
                'questions' => 'required|min:3|max:1000',
            ]);
    
            if($validation->fails()){
                $errors = $validation->errors()->messages();
                return view('pages/contacts', ['errors' => $errors]);
            }

            Mail::to('daiannspark@gmail.com')->send(new EmailSent($request->fullname, $request->email, $request->questions));
        }

        return view('pages/email');
    }
}
