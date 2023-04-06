<?php

use Illuminate\Support\Facades\Route;
use App\Enums\RoleEnum;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route LandingPage Start
Route::group(["namespace" => "App\Http\Controllers\LandingPage" , "as" => "landing-page."], function () {
    Route::get('/', "HomeController@index")->name('home.index');

    Route::group(["as" => "tentang-kami.","prefix" => "tentang-kami"], function () {
        Route::get('/', 'TentangKamiController@index')->name("index");
    });

    Route::group(["as" => "hubungi-kami.","prefix" => "hubungi-kami"], function () {
        Route::get('/', 'HubungiKamiController@index')->name("index");
    }); 

});
// Route LandingPage End

// Route Auth Start
Route::group(["namespace" => "App\Http\Controllers\Auth" , "as" => "auth."], function () {
    Route::get('/login', "LoginController@index")->name('login.index');
    Route::post('/login', "LoginController@login")->name("login.post");

    Route::get('/logout', "LogoutController@index")->name('logout.index');

    Route::get('/register', 'RegisterController@index')->name("register.index");
    Route::post('/register', 'RegisterController@register')->name("register.post");

});
// Route Auth End


// Route For Student Start
Route::group(["namespace" => "App\Http\Controllers\Student", "as"=>"student.", "prefix" => "student"],function () {

    Route::get('/', "StudentController@index")->name("index");

    Route::group(["as" => "tujuan-pembelajaran.", "prefix" => "tujuan-pembelajaran"], function () {
        Route::get('/', "TujuanPembelajaranController@index")->name("index");
    });

    Route::group(["as" => "peta-konsep.", "prefix" => "peta-konsep"], function () {
        Route::get('/', "PetaKonsepController@index")->name("index");
    });

    Route::group(["as" => "ayo-berwawasan.", "prefix" => "ayo-berwawasan"], function () {
        Route::get('/', "AyoBerwawasanController@index")->name("index");
        Route::get('/video', "AyoBerwawasanController@video")->name("video");
        Route::get('/bahan', "AyoBerwawasanController@bahan")->name("bahan");
        Route::get('/soal', "AyoBerwawasanController@soal")->name("soal");
    });

    Route::group(["as" => "ayo-belajar.", "prefix" => "ayo-belajar"], function () {
        Route::get('/', "AyoBelajarController@index")->name("index");
        Route::get('/soal', "AyoBelajarController@soal")->name("soal");
        Route::get('/project', "AyoBelajarController@project")->name("project");
        Route::get('/jadwal', "AyoBelajarController@jadwal")->name("jadwal");
        Route::get('/send', "AyoBelajarController@send")->name("send");
    });

    Route::group(["as" => "ayo-berdiskusi.", "prefix" => "ayo-berdiskusi"], function () {
        Route::get('/', "AyoBerdiskusiController@index")->name("index");
    });

    Route::group(["as" => "info-pengembang.", "prefix" => "info-pengembang"], function () {
        Route::get('/', "InfoPengembangController@index")->name("index");
    });
});
// Route For Student End


// Route For Teacher Start
Route::group(["namespace" => "App\Http\Controllers\Teacher", "as"=>"teaher.", "prefix" => "teacher", "middleware" => ['role:' . implode('|', [RoleEnum::TEACHER])]],function () {
    Route::get('/', "TeacherController@index")->name("index");
});
// Route For Teacher End


// Route For Admin Start
Route::group(['middleware' => ['auth']], function () {

    Route::group(["namespace" => "App\Http\Controllers\Dashboard", "as"=>"dashboard.", "prefix" => "dashboard", "middleware" => ['role:' . implode('|', [RoleEnum::ADMINISTRATOR, RoleEnum::STUDENT, RoleEnum::STUDENT  ])]], function () {
        
        Route::get('/', "DashboardController@index")->name("index");

        Route::group(["middleware"=>["role:".implode("|",[RoleEnum::ADMINISTRATOR])]],function(){
            Route::group(["as" => "user.", "prefix" => "user"], function () {
                Route::get('/', 'UserController@index')->name("index");
                Route::get('/create', 'UserController@create')->name("create");
                Route::get('/{id}', 'UserController@show')->name("show");
                Route::get('/{id}/edit', 'UserController@edit')->name("edit");
                Route::post('/', 'UserController@store')->name("store");
                Route::put('/{id}', 'UserController@update')->name("update");
                Route::delete('/{id}', 'UserController@destroy')->name("destroy");
            });
    
            Route::group(["as" => "kompetensi.", "prefix" => "kompetensi"], function () {
                Route::get('/', 'KompetensiController@index')->name("index");
                Route::get('/create', 'KompetensiController@create')->name("create");
                Route::get('/{id}', 'KompetensiController@show')->name("show");
                Route::get('/{id}/edit', 'KompetensiController@edit')->name("edit");
                Route::post('/', 'KompetensiController@store')->name("store");
                Route::put('/{id}', 'KompetensiController@update')->name("update");
                Route::delete('/{id}', 'KompetensiController@destroy')->name("destroy");
            });
    
            Route::group(["as" => "peta-konsep.", "prefix" => "peta-konsep"], function () {
                Route::get('/', 'PetaKonsepController@index')->name("index");
                Route::get('/create', 'PetaKonsepController@create')->name("create");
                Route::get('/{id}', 'PetaKonsepController@show')->name("show");
                Route::get('/{id}/edit', 'PetaKonsepController@edit')->name("edit");
                Route::post('/', 'PetaKonsepController@store')->name("store");
                Route::put('/{id}', 'PetaKonsepController@update')->name("update");
                Route::delete('/{id}', 'PetaKonsepController@destroy')->name("destroy");
            });
    
            Route::group(["as" => "video.", "prefix" => "video"], function () {
                Route::get('/', 'VideoController@index')->name("index");
                Route::get('/create', 'VideoController@create')->name("create");
                Route::get('/{id}', 'VideoController@show')->name("show");
                Route::get('/{id}/edit', 'VideoController@edit')->name("edit");
                Route::post('/', 'VideoController@store')->name("store");
                Route::put('/{id}', 'VideoController@update')->name("update");
                Route::delete('/{id}', 'VideoController@destroy')->name("destroy");
            });
    
            Route::group(["as" => "bahan.", "prefix" => "bahan"], function () {
                Route::get('/', 'BahanController@index')->name("index");
                Route::get('/create', 'BahanController@create')->name("create");
                Route::get('/{id}', 'BahanController@show')->name("show");
                Route::get('/{id}/edit', 'BahanController@edit')->name("edit");
                Route::post('/', 'BahanController@store')->name("store");
                Route::put('/{id}', 'BahanController@update')->name("update");
                Route::delete('/{id}', 'BahanController@destroy')->name("destroy");
            });
    
            Route::group(["as" => "soal.", "prefix" => "soal"], function () {
                Route::get('/', 'SoalController@index')->name("index");
                Route::get('/create', 'SoalController@create')->name("create");
                Route::get('/{id}', 'SoalController@show')->name("show");
                Route::get('/{id}/edit', 'SoalController@edit')->name("edit");
                Route::post('/', 'SoalController@store')->name("store");
                Route::put('/{id}', 'SoalController@update')->name("update");
                Route::delete('/{id}', 'SoalController@destroy')->name("destroy");
            });
    
            Route::group(["as" => "info-pengembang.", "prefix" => "info-pengembang"], function () {
                Route::get('/', 'InfoPengembangController@index')->name("index");
                Route::get('/create', 'InfoPengembangController@create')->name("create");
                Route::get('/{id}', 'InfoPengembangController@show')->name("show");
                Route::get('/{id}/edit', 'InfoPengembangController@edit')->name("edit");
                Route::post('/', 'InfoPengembangController@store')->name("store");
                Route::put('/{id}', 'InfoPengembangController@update')->name("update");
                Route::delete('/{id}', 'InfoPengembangController@destroy')->name("destroy");
            });
        });     
    });
});
// Route For Admin end