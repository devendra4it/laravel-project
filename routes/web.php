<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/posts', function () {
//     return view('post');
//     //return "<h1>Post Page1</h1>";
// })->name('mypost');

// Route::get('/test', function () {
//     return view('about');
// });

// Route::redirect('/about','/test', 301);

// Route::prefix('page')->group(function(){
//     Route::get('/about', function(){
//         return "<h1>About Page</h1>";
//     });
//     Route::get('/gallery', function(){
//         return "<h1>Gallery Page</h1>";
//     });
//     Route::get('/post/firstpost', function(){
//         return "<h1>First Post Page</h1>";
//     });
// });

// Route::fallback(function(){
//     return "<h1>Page Not Found !</h1>";
// });

// Route::get('/post/firstpost', function () {
//     return view('firstpost');   
// });

//Route::view('/post','post');

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id=null, string $comment=null) {
//     if($id){
//         return "<h1>Post ID : ". $id ."</h1> <h2>comment ID : ". $comment ."</h2>";
//     }else{
//         return "<h1>No ID Found</h1>";
//     }    
// });

// Route::get('/post/{id}/comment/{commentid}', function (string $id, string $comment) {
//     if($id){
//         return "<h1>Post ID : ". $id ."</h1><h2> Comment Id : ". $comment ."</h2>";
//     }else{
//         return "<h1>No ID Found</h1>";
//     }    
// })->where('id', '[0-9]+')->whereAlpha('commentid');



// Route::get('/hello', function () {
//     return view('post');   
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    //$name = "Devendra Sharma !";
    $names = [
            1 => ['name' => 'Devendra', 'phone' => '8527626445', 'city' => 'Delhi'],
            2 => ['name' => 'Ram', 'phone' => '8527626445', 'city' => 'Goa'],
            3 => ['name' => 'Shyam', 'phone' => '8527626445', 'city' => 'Mumbai'],
            4 => ['name' => 'Mohan', 'phone' => '8527626445', 'city' => 'Pune'],
            ];

    return view('users',["user"=>$names, "city"=>"Delhi"]);


    // return view('users')
    // ->with("user",$name)
    // ->with("city","Delhi");
    // return view('users')
    // ->withUser($names)
    // ->withCity("Delhi");
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
