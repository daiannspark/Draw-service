<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Validator;

class OrderController extends Controller
{
    function index(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fullname' => 'required|string|min:3|max:255',
            'phone' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|min:5|max:255|unique:users',
            'comments' => 'required|min:3|max:1000',
            'image' => 'required',
        ]);

        if($validation->fails()){
            $errors = $validation->errors()->messages();
            return view('pages/order', ['errors' => $errors]);
        }

        $image = new Image();

        $image->fullname = $request->input('fullname');
        $image->phone = $request->input('phone');
        $image->email = $request->input('email');
        $image->comments = $request->input('comments');

        if ($request->hasFile('image')) {
            $path = $request->image->store('images');
            $image->image = $path;
        }

        $image->save();

        return view('pages/create');
    }
}
