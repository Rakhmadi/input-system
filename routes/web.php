<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datas','HomeController@showdata')->name('Data');
Route::get('/moch','HomeController@skc')->name('skc');
Route::get('/dell.dev/{parameter}','HomeController@del')->name('delete');
Route::get('/inputing/','HomeController@skc')->name('skc');
Route::Post('/inputs.nitsu','HomeController@inptRecs')->name('save');
Route::get('/read.nittsu/{parameter}', 'HomeController@showd');
Route::get('/edit/{parameter}', 'HomeController@editl');
Route::get('users/export', 'UsersController@export');
Route::get('/edit/ppjk/{parameter}','HomeController@editl');
Route::post('/update/{parameter}', 'HomeController@uptodt');
Route::get('/serch/dim/','HomeController@src');
Route::get('/search_______/sch.nittsu/','HomeController@src');
Route::get('/edit________/cs_ops_______/{parameter}','HomeController@editl');
Route::post('/pending/','HomeController@pending');
Route::get('/_________________________x___/','HomeController@pendhd');