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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['__Session']], function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard.dashboard');       
    // });
    Route::match(['post', 'get'], '/dashboard', 'admin\DashboardController@View');

    
    // Route::get('/pending_tours', function () {
    //     return view('admin.pending_tours');
    // });
    Route::get('pending_tours', 'admin\PendingToursController@index')->name('pending_tours');
    Route::get('pending_tours/getdata', 'admin\PendingToursController@getdata')->name('pending_tours.getdata');
    // Route::match(['post', 'get'], '/get_Plus', 'admin\PendingToursController@getPlus');
   
    // Route::get('/completed_tours', function () {
    //     return view('admin.completed_tours');
    // });

    Route::get('completed_tours', 'admin\CompletedToursController@index')->name('completed_tours');
    Route::get('completed_tours/getdata', 'admin\CompletedToursController@getdata')->name('completed_tours.getdata');

    // Route::get('/users', function () {
    //     return view('admin.users');
    // });

    Route::get('users', 'admin\UserController@index')->name('users');
    Route::get('users/getdata', 'admin\UserController@getdata')->name('users.getdata');
    Route::match(['post', 'get'], '/get_notes', 'admin\UserController@getNotes');

    // Route::get('/pending_users', function () {
    //     return view('admin.pending_users');
    // });
    Route::get('pending_users', 'admin\PendingUsersController@index')->name('pending_users');
    Route::get('pending_users/getdata', 'admin\PendingUsersController@getdata')->name('pending_users.getdata');


    // Route::get('/town_tours', function () {
    //     return view('admin.town_tours');
    // });
    Route::match(['post', 'get'], '/town_tours', 'admin\TownToursController@View');
    Route::match(['post', 'get'], '/town_tours_add', 'admin\TownToursController@AddTown');
    Route::match(['post', 'get'], '/town_tours_edit_town', 'admin\TownToursController@EditTown');
    Route::match(['post', 'get'], '/town_tours_update_town', 'admin\TownToursController@UpdateTown');
    Route::match(['post', 'get'], '/town_tours_delete_town', 'admin\TownToursController@DeleteTown');


    // Route::get('/amenities_tours', function () {
    //     return view('admin.amenities_tours');
    // });
    Route::match(['post','get'], '/amenities_tours', 'admin\AmenitiesController@View');
    Route::match(['post','get'], '/amenities_tours_add', 'admin\AmenitiesController@addAmenities');
    Route::match(['post','get'], '/amenities_tours_edit_view', 'admin\AmenitiesController@editView');
    Route::match(['post','get'], '/amenities_tours_edit', 'admin\AmenitiesController@updateAmenities');
    Route::match(['post','get'], '/amenities_tours_delete', 'admin\AmenitiesController@deleteAmenities');

    // Route::get('/sponsors', function () {
    //     return view('admin.sponsors');
    // });
    Route::match(['post', 'get'], '/sponsors', 'admin\SponsorsController@View');
    Route::match(['post', 'get'], '/sponsors_add', 'admin\SponsorsController@addSponsors');
    Route::match(['post', 'get'], '/sponsors_edit_view', 'admin\SponsorsController@editView');

    
    // Route::get('/tour_licenses', function () {
    //     return view('admin.tour_licenses');
    // });

    Route::match(['post','get'], '/tour_licenses', 'admin\TourLicensesController@View');
    Route::match(['post','get'], '/tour_licenses_delete_t_a', 'admin\TourLicensesController@deleteta');
    Route::match(['post','get'], '/tour_licenses_delete_t', 'admin\TourLicensesController@delete_t');
    Route::match(['post','get'], '/tour_licenses_delete_m', 'admin\TourLicensesController@delete_m');
    
    
    // Route::get('/settings', function () {
    //     return view('admin.settings');
    // });
    Route::match(['post', 'get'], '/settings', 'admin\SettingsController@View');
    Route::match(['post', 'get'], '/settings_add', 'admin\SettingsController@addVideographer');
    Route::match(['post', 'get'], '/settings_edit_view', 'admin\SettingsController@editVideographerView');
    Route::match(['post', 'get'], '/settings_edit_videograper', 'admin\SettingsController@updateVideographer');
    Route::match(['post', 'get'], '/settings_delete', 'admin\SettingsController@deleteSettings');

    // Users Side
    Route::match(['post', 'get'], '/edit_user', 'users\edit\EditUserController@ViewUser');
    Route::match(['post', 'get'], '/edit_user_update', 'users\edit\EditUserController@UpdateUserProfile');

    Route::get('/ordernow', function () {
        return view('users.ordernow');
    });
    // Route::match(['post', 'get'], '/ordernow', 'users\OrderNowController@View');

    Route::get('/active_tours', function () {
        return view('users.active_tours');
    });

    // Route::get('/pending_orders', function () {
    //     return view('users.pending_orders');
    // });
    Route::match(['post', 'get'], '/pending_orders', 'users\PendingOrdersController@View');
    
    
});


Route::match(['post', 'get'], '/login', 'authentication\LoginController@authentication');
Route::match(['post', 'get'], '/register', 'register\RegisterController@register');
// Route::match(['post', 'get'], '/pending_tours', 'admin\PendingToursController@index');
// Route::resource('pending-tours', 'admin\PendingToursController');

