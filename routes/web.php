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
Route::get('/',function()
{
    echo "<h1>This is Home page</h1>";

});
Route::get('/about',function ()
{
   echo "<h2>This is About page</h2>";
});
Route::get('/contact',function ()
{
   echo "<h2>This is Contact page</h2>";
});
Route::get('/user', function ()
{
   return view('user',['name'=>'Masub Alam']);
});

Route::get('/user-name/{name}',function ($name)
{
   echo "xin chao. t la ".$name;
});
Route::get('/','HomeController@index');