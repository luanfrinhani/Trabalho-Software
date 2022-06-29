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

use App\Http\Controllers\System\Admin\ClientController;
use App\Http\Controllers\System\Admin\MaterialController;
use App\Http\Controllers\System\Admin\ProductController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('welcome', ['locale' => app()->getLocale()]));
});


Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '^[a-z]{2}(?:-[a-z]{2})?$'],
        'middleware' => SetLocale::class
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');

        //Rotas do User
        Route::prefix('system')->group(function () {
            //Rotas de autenticação
            Auth::routes();

            //Rotas de autenticação pelo IAM
//            Route::get('/login', 'Auth\IAMController@login')->name('login');
//            Route::get('/register', 'Auth\IAMController@register')->name('register');
//            Route::get('/logout', 'Auth\IAMController@logout')->name('system.get.logout');
//            Route::post('/logout', 'Auth\IAMController@logout')->name('logout');
//            Route::get('/callback', 'Auth\IAMController@callback')->name('callback');

            Route::middleware('auth')->group(function () {
                Route::get('/', 'HomeController@index')->name('home');
                Route::resource('/user', 'System\Admin\UserController', ['as' => 'system']);
                //Rotas de usuarios pelo IAM
//                Route::resource('/user', 'System\Admin\UserIAMController', ['as' => 'system']);
//                Route::get('/user-search', 'System\Admin\UserIAMController@searchByEmail')
//                    ->name('system.user.search');

                Route::get('/profile/information', 'System\Admin\ProfileController@editInformation')
                    ->name('system.profile.information.edit');
                Route::match(['put', 'patch'], '/profile/information', 'System\Admin\ProfileController@updateInformation')
                    ->name('system.profile.information.update');
                Route::get('/profile/password', 'System\Admin\ProfileController@editPassword')
                    ->name('system.profile.password.edit');
                Route::match(['put', 'patch'], '/profile/password', 'System\Admin\ProfileController@updatePassword')
                    ->name('system.profile.password.update');

                // Rotas do produto
                Route::resource('material', MaterialController::class);

                // Rotas do cliente
                Route::resource('client', ClientController::class);
            });
        });

    }
);
