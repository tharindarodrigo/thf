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

Auth::routes();

Route::get('/', function () {
    return view('frontend.index');
});

//Route::get('/home', 'HomeController@index');


Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

/*
|---------------------------------------------------------------------------------------------------------------------
|  Front
|---------------------------------------------------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('frontend.index');
});


Route::group(['middlware' => 'auth'], function () {

});

//Route::group(['middlware'=>'guest'], function (){

Route::get('/signIn', function () {
    return view('frontend.signIn');
});

Route::get('/forgot-password', function () {
    return view('frontend.forgotPassword');
});

Route::get('/reset-password', function () {
    return view('frontend.resetPassword');
});

Route::get('/register', function () {
    return View('frontend.register');
});

//});


Route::get('/about', function () {
    return view('frontend.about');
})->middleware('auth');

Route::get('/contact', function () {
    return view('frontend.contactUs');
});

Route::get('/guarantee', function () {
    return view('frontend.guarantee');
});

Route::get('/categories', function () {
    return view('frontend.categories');
});

Route::get('/password', function () {
    return view('frontend.account.password');
});


Route::group(['prefix' => 'seller/'], function () {

    Route::group(['prefix' => '/sign-up/'], function () {

        Route::group(['prefix' => '/step/'], function () {


            Route::get('1', "SellerSignUpController@getStep1")->name('seller.register');

            Route::get('2', "SellerSignUpController@getStep2")->name("form2");

            Route::get('3', "SellerSignUpController@getStep3")->name("seller-sign-up-final");


        });

        Route::group(['prefix' => '/post/'], function () {

            Route::post('form1', "SellerSignUpController@setForm1Data")->name('seller.post-sign-up.step1');
            Route::post('form2', "SellerSignUpController@setForm2Data")->name('seller.post-sign-up.step2');


        });

    });

    Route::group(['prefix' => '/account'], function () {

        Route::get('/', 'SellerAccountController@get');

        Route::get('/commission', 'SellerAccountController@getCommission');

        Route::get('/change-password', 'SellerAccountController@getChangePassword');

        Route::post('/update-password', 'SellerAccountController@updatePassword');


    });

});

/*
|----------------------------------------------------------------------------------------------------------------------
|   End Front
|----------------------------------------------------------------------------------------------------------------------
*/


/*
|----------------------------------------------------------------------------------------------------------------------
|   Control Panel
|----------------------------------------------------------------------------------------------------------------------
*/


Route::group(['prefix' => '/control-panel', 'middleware' => ['role:admin']], function () {


    Route::get('/welcome', function () {
        return view('control-panel.test');
    });

    Route::resource('/users', 'UserAdminController');

    Route::group(['prefix' => '/users'], function () {


        Route::patch('/{id}/activate', 'UserAdminController@activate')->name('users.activate');
        Route::patch('/{id}/deactivate', 'UserAdminController@deactivate')->name('users.deactivate');

    });
});