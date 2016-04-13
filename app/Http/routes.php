<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
    'as' => 'home',
    'uses' =>'HomeController@index'
]);
Route::get('/gioi-thieu',[
    'as' => 'gioithieu',
    'uses' =>'HomeController@gioithieu'
]);
Route::get('/video-phong-karaoke',[
    'as' => 'video',
    'uses' =>'HomeController@video'
]);
Route::get('/bao-gia-phong-karaoke',[
    'as' => 'baogia',
    'uses' =>'HomeController@baogia'
]);
Route::get('/cong-trinh-karaoke',[
    'as' => 'congtrinh',
    'uses' =>'HomeController@congtrinh'
]);
Route::get('/hinh-anh-phong-karaoke',[
    'as' => 'hinhanh',
    'uses' =>'HomeController@hinhanh'
]);
Route::group(['prefix' => 'noi-that-phong-karaoke'], function () {
    Route::get('ban-karaoke-ban-mini-bar',[
        'as' => 'noithat.ban',
        'uses' => 'NoithatController@ban'
    ]);
    Route::get('ghe-phong-karaoke-ghe-sofa',[
        'as' => 'noithat.ghe',
        'uses' => 'NoithatController@ghe'
    ]);
    Route::get('vat-lieu-cach-am-tieu-am',[
        'as' => 'noithat.tieuamcacham',
        'uses' => 'NoithatController@tieuamcacham'
    ]);
    Route::get('vat-lieu-trang-tri',[
        'as' => 'noithat.trangtri',
        'uses' => 'NoithatController@trangtri'
    ]);
    Route::get('anh-sang-cam-bien-theo-nhac',[
        'as' => 'noithat.anhsang',
        'uses' => 'NoithatController@anhsang'
    ]);
    Route::get('anh-sang-nhay-theo-nhac',[
        'as' => 'noithat.anhsang',
        'uses' => 'NoithatController@anhsang'
    ]);
    Route::get('tivi-phong-karaoke',[
        'as' => 'noithat.amthanhtividieuhoa',
        'uses' => 'NoithatController@amthanhtividieuhoa'
    ]);
    Route::get('am-thanh-tivi-dieu-hoa-phong-karaoke',[
        'as' => 'noithat.amthanhtividieuhoa',
        'uses' => 'NoithatController@amthanhtividieuhoa'
    ]);
    Route::get('am-thanh-phong-karaoke',[
        'as' => 'noithat.amthanhtividieuhoa',
        'uses' => 'NoithatController@amthanhtividieuhoa'
    ]);
});
Route::group(['prefix' => 'tu-van'], function () {
    Route::get('thiet-ke-phong-karaoke',[
        'as' => 'linhvuc.thietke',
        'uses' => 'LinhvucController@thietke'
    ]);
    Route::get('thi-cong-phong-karaoke',[
        'as' => 'linhvuc.thicong',
        'uses' => 'LinhvucController@thicong'
    ]);
    Route::get('mau-phong-karaoke',[
        'as' => 'linhvuc.mauphong',
        'uses' => 'LinhvucController@mauphong'
    ]);
    Route::get('noi-that-phong-karaoke',[
        'as' => 'linhvuc.noithat',
        'uses' => 'LinhvucController@noithat'
    ]);
    Route::get('nang-cap-phong-karaoke',[
        'as' => 'linhvuc.nangcap',
        'uses' => 'LinhvucController@nangcap'
    ]);
});
define('ROBOTS','index,follow');
define('ROBOTSNO','noindex,nofollow');
define('ARTICLE','article');
define('WEBSITE','website');
define('OBJECT','object');