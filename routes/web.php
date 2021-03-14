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
// //LP獲得用
// Route::get('special', function () {
//     return view('fb.cccheck'); //LP提出用
//     //リダイレクトLPへ切り替え - cccheckを変更
    
//     // return view('fb.pp'); //獲得LP(2) - パパ活
//     // return view('fb.job'); //獲得LP(1)
// });

//OS識別
Route::get('special', 'AdController@os');

// //LP確認用
// Route::get('cccheck', function () {
//     return view('fb.pp'); //獲得LP(2) - パパ活
    
//     // return view('fb.job'); //獲得LP(1)
// });
