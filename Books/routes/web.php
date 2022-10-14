<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\BookModel;

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
    return view('welcome');
});

// Route::resource("books", BookController::class);

// Route::get('/insert', function () {
// $book_models = new BookModel();
// $book_models->book_image = 'https://d3i5mgdwi2ze58.cloudfront.net/swd3lfscp8lshlhuwfjng9s92o8q';
// $book_models->book_title = 'War and Peace';
// $book_models->book_author = 'Leo Tolstoy';
// $book_models->book_description = 'War and Peace delineates in graphic detail events leading up to Napoleon';
// $book_models->updated_at = '';
// $book_models->created_at = '';

// $book_models->save();

// BookModel::create(['book_image' => 'https://d3i5mgdwi2ze58.cloudfront.net/swd3lfscp8lshlhuwfjng9s92o8q', 'book_title' => ' War and Peace', 'book_author' => 'Leo Tolstoy', 'book_description' => 'War and Peace delineates in graphic detail events leading up to Napoleon']);
// });

// Route::get('/read', function () {
//     $result = DB::select(query:'select * from book_models where id = ?', [1]) ;
//     return $result ;
// });

Route::get('index', [BookController::class,'index']);
Route::post('store', [BookController::class,'store']);



Route::get('addBooks', function () {
    return view('addBooks');
});
