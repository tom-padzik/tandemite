<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/logout', static function () {
    Auth::logout();
    return Redirect::route('login.get');
});


require_once(app_path('/Modules/Auth/Routes/web.php'));
require_once(app_path('/Modules/UploadedImages/Routes/web.php'));
