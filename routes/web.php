<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/Client/Dashboard');
});

Route::get('former_event', function(){
    return view('/Client/Former_Event');
});
