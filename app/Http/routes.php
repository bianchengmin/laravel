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
//闭包路由
Route::get('/home', function () {
    
    return view('welcome');
});

//输出服务器当前时间
Route::get('now', function () {
    return date("Y-m-d H:i:s");
});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {  
    Route::get('/', 'HomeController@index');
    Route::resource('article', 'ArticleController');
});

/*
Route::get('foo', array('https', function()
    {
            return 'Must be over HTTPS';

    }));
 */
Route::auth();
//控制器@方法  路由
//当以GET方法访问localhost/home时，调用HomeController控制器中的index方法

Route::get('/', 'HomeController@index');
//同样可以使用   Route::post('/home', 'HomeController@index');
