<?php

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
Route::get('/', function()
{
	$movies = App\Movie::where(function($query){
		$from_date = Request::Input('from_date') ?  Request::Input('from_date') : null;
		$to_date = Request::Input('to_date') ? Request::Input('to_date') : $max_price = null;
		if(isset($from_date) && isset($to_date)){
			$query-> where('date_published','>=',$from_date);
			$query-> where('date_published','<=',$to_date);
		}
	})->get();
	return View::make('index', compact(['movies']));
});

Route::get('/welcome', function () {
    return View('welcome');
});