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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('home', function()
{
	return view('main');
});

//Route::get('results', 'main@results');

Route::get('previous', function()
{
	$answers = DB::table('answers2')->get();
	
    return view('previous', ['petani' => $answers]);
});

Route::get('results', function()
{
	$answers = DB::table('answers2')->latest()->first();

    return view('results', ['petani' => $answers]);
});

Route::get('register', function()
{
    return view('register');
});

Route::get('questions', function()
{
	$questions = DB::table('questions2')->get();

    return view('question', ['petani' => $questions]);
});

Route::post('questions/postear', 'Controller@store');


Route::get('/question/{id}','main@show')->where('id', '[0-9]+');