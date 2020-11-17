<?php

// 可以看到 deploy:writable 这个任务已经成功执行了，但是在执行 artisan:migrate 时报错了，根据报错信息可以知道这是因为 Laravel 不支持对 api/user 这个闭包路由做缓存，这个路由是在创建 Laravel 项目时默认带的，我们在项目中并没有用到，因此可以删除：
/*
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
*/

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
