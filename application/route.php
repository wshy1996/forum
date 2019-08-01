<?php
use think\Route;
//test
Route::get('api/:version/index','api/:version.Index/index');
//token
Route::post('api/:version/token/app','api/:version.Token/getAppToken');
