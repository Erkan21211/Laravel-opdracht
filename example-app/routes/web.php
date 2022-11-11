<?php


// imported class Request --> for '/search'
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// import Controller
use App\Htpp\Controllers\ContactController;
use App\Http\Controllers\ContactController as ControllersContactController;

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



// Views [page] setters

// Route::get('/', function() {
//     // varible gegevens in zitten (data-passing)
//     // gegevens Model: App\Models\listen
//     return Route::resource("/contact", ControllersContactController::class);
// });

Route::resource("/contact", ControllersContactController::class);





// oefen code:

// // all lijsten laten zien
// Route::get('/lijst', function () {
//     // varible gegevens in zitten (data-passing)
//     // gegevens Model: App\Models\listen
//     return view('lijst', [
//         'heading' => 'lijst',
//         'lijsten' => listen::all()
//     ]
//     );
// });

// // 1 lijst
// Route::get('/lijst-order/{id}', function ($id) {
//     // varible gegevens in zitten (data-passing)
//     // gegevens Model: App\Models\listen
//     return view('lijst-order', [
//         'persoon' => listen::vind($id)
//     ]);
// });


// // my Route's
// Route::get('/hello', function() {
//     // return response('hello', 200)->header('Content-Type', 'text/plain');
//     return view('hello');
// });

// Route::get('/post/{id}', function($id){
//     return response('Post ' . $id);
// });//->where('id', '[0-10]+');



// // Request  & Query Params
// // import Request module or class?

// Route::get('/search', function(Request $request) {
//     // dd($request);
//     return ($request->naam . ' ' . $request->achternaam);
// });

// Route::get('/search', function(Request $request) {
//     // dd($request);
//     return ($request->naam . ' ' . $request->achternaam);
// });


