<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 認証系
Route::post('/register', 'Auth\AuthController@register')->name('register');
Route::post('/login', 'Auth\AuthController@login')->name('login');
Route::post('/passwordReminder', 'Auth\AuthController@updatePassword')->name('passwordReminder');
Route::post('/passwordReceive', 'Auth\AuthController@passwordReceive')->name('passwordReceive');

//権限付加
Route::post('/contributorRegistration', 'roll\changeOfAuthorityController@contributorRegistration')->name('contributorRegistration');

// 会社情報検索
// TODO: まだ途中
Route::post('/reviewCompanySearch', 'companyDate\searchCompanyDateController@searchCompanyDate')->name('reviewCompanySearch');


// 会社情報登録申請
Route::post('/applyCompany', 'applyCompany\applyCompanyController@applyCompany')->name('applyCompany');

// バリテーション関係
// emailの重複確認
// Route::post('/emailDup', 'validate\validController@emailDup')->name('emailDup');
