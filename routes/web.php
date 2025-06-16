<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/home/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    return view('home');
});*/

require_once('user_interface.php');

Route::prefix('admin-panel')->middleware('auth')->name('admin.panel.')->group(function () {
    require_once('admin.php');
});

