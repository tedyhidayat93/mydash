<?php
use Illuminate\Support\Facades\Route;


// components starter template
Route::get('/', function(){
    return view('components.dashboards.v1');
});
Route::get('/starter-page', function(){
    return view('components.starter_page.index');
});
Route::get('/alerts', function(){
    return view('components.alerts.index');
});
Route::get('/charts', function(){
    return view('components.charts.index');
});
Route::get('/cards', function(){
    return view('components.cards.index');
});
Route::get('/colors', function(){
    return view('components.colors.index');
});
Route::get('/forms', function(){
    return view('components.forms.index');
});
Route::get('/buttons', function(){
    return view('components.buttons.index');
});
Route::get('/tables', function(){
    return view('components.tables.index');
});
Route::get('/modals', function(){
    return view('components.modals.index');
});
Route::get('/tabulators', function(){
    return view('components.tabulators.index');
});
Route::get('/dashboard-v1', function(){
    return view('components.dashboards.v1');
});
Route::get('/dashboard-v2', function(){
    return view('components.dashboards.v2');
});
Route::get('/dashboard-v3', function(){
    return view('components.dashboards.v3');
});
Route::get('/dashboard-v4', function(){
    return view('components.dashboards.v4');
});
Route::get('/example/form-pagination', function(){
    return view('components.example.form-pagination');
});
Route::get('/example/profile-page', function(){
    return view('components.example.profile-page');
});
Route::get('/example/card-detail', function(){
    return view('components.example.card-detail');
});
Route::get('/example/card-detail-expand-item', function(){
    return view('components.example.card-with-expand-item');
});
Route::get('/example/login', function(){
    return view('components.auth.login');
});
Route::get('/example/registration', function(){
    return view('components.auth.registration');
});
Route::get('/example/forgot-password', function(){
    return view('components.auth.forgot_password');
});
Route::get('/example/change-password', function(){
    return view('components.auth.change_password');
});
Route::get('/example/404', function(){
    return view('components.errors.404');
});
Route::get('/example/500', function(){
    return view('components.errors.500');
});
Route::get('/example/503', function(){
    return view('components.errors.503');
});

