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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
	$data['name'] = 'Wuttinan';
	$data['last_name'] = 'chaoyos';
    return view('about',$data);
});

Route::get('/plus/{num1?}/{num2?}', function($num1=0,$num2=0) {
	echo $num1;
	echo $num2;
	// return view('plus');
});