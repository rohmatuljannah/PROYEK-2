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

//Landing Page
Route::get('/', 'SocialclassController@homepage');
Route::get('/act', 'ActController@index');
Route::get('/detailact/{data_aktivitas}', 'ActController@show');
Route::get('/detailaktivitas/{data_aktivitas}', 'ActController@lihat');
Route::get('/volunteer', 'SocialclassController@volunteer');
Route::get('/about', 'SocialclassController@about');
Route::get('/home', 'HomeController@home')->name('home');

//Admin
Route::get('/admin/login', 'AdminController@getLogin')->name('login_admin');
Route::post('/admin/login', 'AdminController@postLogin')->name('postlogin');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin-dashboard');
Route::get('/admin/profil', 'AdminController@profil')->name('admin-profil');
Route::get('/admin/laporan_volunteer', 'AdminController@laporan_volunteer');
Route::get('/admin/laporan', 'AdminController@laporan');
Route::get('/admin/detail-act', 'AktivitasController@detail_act');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/aktivitas', 'AktivitasController@index');
Route::post('/admin/aktivitas/create', 'AktivitasAdminController@create');
Route::get('/admin/aktivitas/{data_aktivitas}', 'AktivitasController@show');
Route::get('/admin/aktivitas/{data_aktivitas}/edit', 'AktivitasAdminController@edit');
Route::patch('/admin/aktivitas/{data_aktivitas}', 'AktivitasAdminController@update');
Route::get('/admin/aktivitas/{data_aktivitas}/destroy', 'AktivitasAdminController@destroy');
Route::get('/admin/laporan_aktivitas', 'AktivitasController@laporan_aktivitas');
Route::get('/admin/datavolunteer', 'VolunteerAdminController@index');
Route::get('/admin/datavolunteer/{data_volunteer}/destroy', 'VolunteerAdminController@destroy');
Route::get('/admin/datavolunteer/{data_volunteer}/show', 'VolunteerAdminController@show');

//Volunteer
Route::get('/datavol', 'VolunteerController@editvol');
//Route::get('/profil_edit', 'VolunteerController@showedit');
Route::match(['get', 'post'], '/profil_edit', 'VolunteerController@editvol')->name('editvol');
Route::patch('/datavol/{data_volunteer}', 'VolunteerController@updatevol');
Route::get('/dashboardvolunteer', 'VolunteerController@dashboardvolunteer');
// Route::get('/datavolunteer', 'VolunteerController@index');
// Route::get('/datavolunteer/{data_volunteer}', 'VolunteerController@show');
Route::get('/datavolunteer/{data_volunteer}/edit', 'VolunteerController@edit');
Route::patch('/datavolunteer/{data_volunteer}', 'VolunteerController@update');
Route::get('/datavolunteer/{data_volunteer}/destroy', 'VolunteerController@destroy');
Route::get('/laporan_volunteer', 'VolunteerController@laporan_volunteer');
Route::get('/homee', 'VolunteerController@homevolunteer');
Route::get('/homeact', 'ActController@homeact');
Route::get('/homeabout', 'VolunteerController@homeabout');
Route::get('/vaktivitas', 'ActController@vaktivitas');
Route::get('/vprofil', 'VolunteerController@vprofil')->name('vprofil');
Route::get('/cetak_pdf', 'ActController@cetak_pdf');
Route::get('/profil_pdf', 'VolunteerController@profil_pdf');

Route::get('/logout', 'AuthController@logout');
Route::get('/pilihact', 'AktivitasController@showpilihact');
Route::post('/pilihact', 'AktivitasController@pilihact')->name('pilihact');

//Auth Volunteer
Auth::routes(['verify' => true]);
