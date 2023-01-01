<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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
// All listing
// Route::get('/', function () {
//     return view('listings', [
//         'listings' => Listing::all()
//     ]);
// });

Route::get('/', [ListingController::class, 'index']);

Route::resource('listings', ListingController::class);

// // Single listing
// Route::get('/listings/{listing}', [ListingController::class, 'show']);

// You can also add response request

// Route::get('/', function() {
//     return response('welcome') // to change the response code, add second argument to the response function
//     ->header('Content-Type', 'text/plain') // header of response
//     ->header('foo', 'bar'); // added custom header
// });

// added params using wildcard to the endpoint
// Route::get('/posts/{id}', function($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+'); // added constraint to the wildcard

// using the controller
// Route::get('/', [PagesController::class, 'home'])->name('home.page');

// using the resource controllers
// Route::resource('tasks', TaskController::class);