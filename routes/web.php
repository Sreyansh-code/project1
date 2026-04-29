<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\loginController;
use App\Http\Middleware\checkAdmin;

Route::get('/', function () {
    return view('welcome');
});

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

// Route::get('/delete-cookie', function(){
//     return response('Deleted')->withoutCookie('name');
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


// Route::get('/student-details', [StudentController::class, 'details']);


// redirect routes -> we need this for named routes

// Route::get('/test', function(){
//     return 'this is my test route';
// })->name('A');

// Route::get('/login', function(){
//     return redirect()->route('A');
// });


//secure routes
// Route::get('/secure', function(){
//     return 'This is a secure route';
// })->middleware('auth');


// Regular expression constraints on route parameters
// Route::get('/user/{id}/{name}', function($id, $name){
//     return 'User ID: '.$id. ' and name: '.$name;
// })->where('id', '[0-9]+')
// ->where('name', '[A-Za-z]+');



// Route::pattern('id', '[0-9]+');
// Route::pattern('name', '[A-Za-z]+');


// Route::middleware('auth')->group(function(){
//     Route::get('/test', function(){
//         return 'Test page';
//     });
//     Route::get('/test2', function(){
//         return 'Test page2';
//     });
// });

// Route::controller(StudentController::class)->group(function(){
//     Route::get('/students', 'students');
//     Route::get('/student/{name}', 'student');
// });

// Route::prefix('admin')->controller(StudentController::class)->group(function(){
//     Route::get('/students', 'students');
//     Route::get('/student/{name}', 'student');
// });



// Route::get('/dashboard', function(){
//     return 'This is my dashboard';
// })->middleware('auth');

// require __DIR__.'/auth.php'



// Route::get('/dashboard', function(Request $request){
//     return $request->path();
// });


// Route::domain('admin.mysite.com')->group(function(){
//     Route::get('/', function(){
//         return 'Welcome admin';
//     });
//     Route::get('/dashboard', function(){
//         return 'This is admin dashboard';
//     });
// });


// Route::get('/dashboard', function(){
//     if(request()->is(('/dashboard'))){
//         return 'This is my dashboard';
//     }
//     else{
//         return 'Not found';
//     }
// });

// Route::get('/dashboard/{id}', function($id){
//     return 'this is sample route';
// })->name('AB');

// Route::get('/details', [StudentController::class, 'details']);

// Route::get('/login', function(){
    // return to_route('AB');
    // return url('/dashboard');
    // return url('/home', ['id'=> 5]);
    // return route('AB', ['id' => 5]);
    // return action([StudentController::class, 'details']);
    // return request()->input('name', 'Sreyansh');
    // return request()->has('name');
// });

// how to get cookies asked in CA 
// three methods to register middleware
// with, compact and array -> all the methods of passing data

// Route::get('/auth', function(){
//     return 'this is my admin dashboard';
// })->middleware(checkAdmin::class);