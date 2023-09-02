<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register',[UserController::class,'store']);

Route::post('email',[EmailVerificationController::class,'EmailVerification']);

Route::post('login', [UserController::class, 'login']);

Route::post('ForgetPassword',[\App\Http\Controllers\ForgetPasswordController::class,'ForgetPassword']);

Route::post('reset',[\App\Http\Controllers\ResetPasswordController::class,'ResetPassword']);


Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::post('update_profile', [UserController::class, 'update']);

    Route::get('profile',[UserController::class,'profile']);

    Route::get('logout',[UserController::class,'logout']);

});
Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('comment', [\App\Http\Controllers\HotelController::class, 'Comment']);

    Route::post('favourite_hotel',[\App\Http\Controllers\HotelController::class,'favourite_hotel']);

    Route::post('reserve',[\App\Http\Controllers\HotelController::class,'reservation_room']);

    Route::post('reserve_offer',[\App\Http\Controllers\HotelController::class,'reservation_offer_room']);

    Route::post('comment_place', [\App\Http\Controllers\placescontroller::class, 'Comment']);

    Route::post('favourite_place',[\App\Http\Controllers\placescontroller::class,'favourite_place']);

    Route::post('reserve_place',[\App\Http\Controllers\placescontroller::class,'reservation_place']);

    Route::post('favourite_restaurant',[\App\Http\Controllers\RestaurantController::class,'favourite_restaurant']);

    Route::post('Reserve_trip', [\App\Http\Controllers\AirportController::class, 'Reserve']);

    Route::get('my_reserve',[UserController::class,'My_reservation']);

    Route::get('my_favourite',[UserController::class,'My_favourite']);

    Route::post('complaint', [\App\Http\Controllers\UserController::class,'complaints']);
});
//city
Route::get('city',[\App\Http\Controllers\CityController::class,'index']);

Route::post('profile_city',[\App\Http\Controllers\CityController::class,'profile_city']);

//Hotelcc
Route::post('searchHotel',[\App\Http\Controllers\HotelController::class,'search']);

Route::post('profile_hotel',[\App\Http\Controllers\HotelController::class,'profile_Hotel']);

Route::post('room',[\App\Http\Controllers\HotelController::class,'room']);

Route::post('profile_room',[\App\Http\Controllers\HotelController::class,'profile_room']);

Route::post('offer_room',[\App\Http\Controllers\HotelController::class,'offer_room']);

Route::post('comment_hotel', [\App\Http\Controllers\HotelController::class, 'Comment_hotel']);


Route::get('all_country',[\App\Http\Controllers\CountryController::class,'index']);

Route::post('country',[\App\Http\Controllers\CountryController::class,'Country']);

//Places

Route::post('Search_places',[\App\Http\Controllers\placescontroller::class,'search']);

Route::post('profile_places',[\App\Http\Controllers\placescontroller::class,'profile_places']);

Route::post('all_Comment_place', [\App\Http\Controllers\placescontroller::class, 'Comment_place']);

//restaurant
Route::post('search_restaurant', [\App\Http\Controllers\RestaurantController::class, 'search_restaurant']);

Route::post('profile_restaurant', [\App\Http\Controllers\RestaurantController::class, 'profile_restaurant']);

//airport
Route::post('search_trips', [\App\Http\Controllers\AirportController::class, 'Search']);

Route::post('ticket', [\App\Http\Controllers\AirportController::class, 'Ticket']);


