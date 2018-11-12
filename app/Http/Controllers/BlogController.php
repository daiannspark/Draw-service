<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|string|min:3|max:255',
            'text' => 'required|min:3|max:1000',
        ]);

        if($validation->fails()){
            $errors = $validation->errors()->messages();
            return view('pages/admin_blog', ['errors' => $errors]);
        }

        $blog = new Blog();

        $blog->title = $request->input('title');
        $blog->text = $request->input('text');

        $blog->save();

        return view('pages/admin_blog');
    }
}
