<?php

use Illuminate\Http\Request;
use App\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/gallery');
});

Route::get('/order', function () {
    return view('pages/order');
});

Route::post('/create', function (Request $request) {

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
});

Route::get('/admin', function () {

    $images = DB::table('images')->get();

    return view('pages/admin', ['images' => $images]);
});

Route::get('/contacts', function () {
    return view('pages/contacts');
});


















// Route::get('/', function () {
   
// $todosNoDatabazes = \App\Todo::orderBy('updated_at', 'desc')->get();
   
//     return view('pages/todo' , [
//         'todos' => $todosNoDatabazes,
//     ]);
// });

// Route::any('addnew/', function () {
//     $jaunsTodo = new \App\Todo;
    
//     $jaunsTodo->title = \Request('note');
//     $jaunsTodo->body = 'Some default body';
//     $jaunsTodo->is_done = false;

//     $jaunsTodo->save();

//     // dd( $jaunsTodo );
//     return redirect('/');
// });

// Route::get('/delete/{id}', function ($id) {
   
//     $todo = \App\Todo::find($id);
//     if ($todo != null) {
//         $todo->delete();
//     }

//     return redirect('/');
    
//     });

//     Route::get('/update/{id}', function ($id) {
   
//         $todo = \App\Todo::find($id);
//         if ($todo->is_done == true) {
//             $todo->is_done = false;
//         } else {
//             $todo->is_done = true;
        
//         }
//     $todo->save();
//         return redirect('/');
        
//         });    