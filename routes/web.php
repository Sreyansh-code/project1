<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/dashboard', 'dashboard')->name('dashboard');

// Route::get('/product', [ProductController::class, 'product']);

// Route::get('/cal/{op}/{num1}/{num2}', function ($op, $num1, $num2) {
//     if($op == '+') return $num1 + $num2;
//     else if($op == '-') return $num1 - $num2;
//     else if($op == '*') return $num1 * $num2;
//     else if($op == '/') return $num1 / $num2;
//     else return 'Invalid';
// });

// Route::get('/user/{id}', function ($id) {
//     return 'user id: '.$id;
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/user/{id?}', function ($id=0) {
//     return view('user', ['id' => $id]);
// });

// Route::get('/user/{id?}', [UserController::class, 'show']);


// Route::get('/students', [StudentController::class, 'students']);

// Route::get('/student/{name}', [StudentController::class, 'student']);

// Route::get('/course/{course?}', [StudentController::class, 'course']);




// Nested Routes

// Route::prefix('admin')->group(function(){
//     Route::get('/dashboard', function(){
//         return "This is admin dashboard";
//     });
//     Route::prefix('users')->group(function(){
//         Route::get('/list', function(){
//             return "This is admin users list";
//         });
//         Route::get('/create', function(){
//             return "This is admin users create";
//         });
//     });
// });



// Response Routes

// Route::get('/header', function(){
//     return response("Hello World")
//     ->header('Content-Type', 'text/plain')
//     ->header('X-Custom-Header', 'Laravel');
// });

// Route::get('/api/student', function(){
//     return response()->json(
//         [
//             'name' => "Sreyansh",
//             'course' => "Laravel"
//         ]
//     );
// });



// Cookies

// Route::get('/set-cookie', function() {
//     return response('Cookie created')
//     ->cookie('name', 'Sreyansh', 1)
//     ->cookie('role', 'admin', 1);
// });

// Route::get('/read-cookie', function(Request $request) {
//     $role = $request->cookie('role');
//     return 'Cookie Value: '.$role;
// });

// Route::get('/read-cookie1', function(){
//     $name = Cookie::get('name');
//     return 'Cookie Value: '.$name;
// });




// Redirect Routes

// Route::get('/old-dashboard', function() {
//     return 'Dashboard';
// })->name('AB');

// Route::get('/login', function() {
//     return redirect()->route('AB');
// });

// Route::get('/signup/{email}/{password}', function($email, $password) {
//     if($email === 'abc@gmail.com' && password === 'abc'){
//         return redirect()->route('AB');
//     }
//     else{
//         return 'Error';
//     }
// });



// Route::get('/dashboard', [StudentController::class, 'students']);

// Route::get('/go', function() {
//     return redirect()->action([StudentController::class, 'students']);
// });


// Route::get('/product/{id}', [ProductController::class, 'show'])->name('pd');

// Route::get('/redirect-product', [ProductController::class, 'productRedirect']);



// using resource controller

// Route::resource('books', BookController::class);

// Route::resource('movies', MovieController::class);



// using API Controller

// Route::apiResource('api/products', ApiController::class);




// Single Action Controller

// Route::get('/user', [loginController::class, '__invoke']);


// using middleware

// Route::get('/test', [StudentController::class, 'students']);
// Route::get('/test1', [StudentController::class, 'profile'])->middleware('check.course');
// Route::get('/test2', function() {
//     return 'This is my normal route';
// });

// Route::get('/home', function() {
//     return view('home');
// });
