<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listing/{id}', function ($id) {
    return view('listing', [
        'id' => $id,
        'heading' => 'Listing ' . $id,
        'listing' => Listing::find($id)
    ]);
})->where('id', '[0-9]+');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return response('<h1>Error</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('posts ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $req, Response $res) {
//     return ($req->name . ' ' . $req->city);
// });