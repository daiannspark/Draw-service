<?php

use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BlogController;

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
})->name('gallery');



Route::get('/blog', function () {
    $blogs = DB::table('blogs')->get();

    return view('pages/blog', ['blogs' => $blogs]);
})->name('blog');



Route::get('/order', function () {
    return view('pages/order');
})->name('order');

Route::post('/create', function (Request $request, OrderController $orderController) {
    return $orderController->index($request);
})->name('create');



Route::get('/contacts', function () {
    return view('pages/contacts');
})->name('contacts');

Route::post('/email', function (Request $request, ContactsController $contactsController) {
    return $contactsController->index($request);
})->name('email');




//Main admin page
Route::get('/admin', function () {
    return view('pages/admin');
})->name('admin')->middleware('auth');

//Admin images page
Route::get('/admin/images', function () {
    $images = DB::table('images')->get();

    return view('pages/admin_images', ['images' => $images]);
})->name('admin.images')->middleware('auth');

//Admin blog page
Route::get('/admin/blog', function () {
    return view('pages/admin_blog');
})->name('admin.blog')->middleware('auth');

Route::post('/admin/blog', function (Request $request, BlogController $blogController) {
    return $blogController->index($request);
})->name('admin.blog')->middleware('auth');

Auth::routes();















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
