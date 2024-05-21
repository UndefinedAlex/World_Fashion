<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/Client/Dashboard');
});

Route::get('former_event', function(){
    return view('/Client/Former_Event');
});

Route::get('login_client', function(){
    return view('/Client/Login_Client');
});
Route::get('signin_client', function(){
    return view('/Client/Signin_Client');
});
