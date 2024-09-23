<?php

use App\Livewire\Bookings\BookingList;
use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelAdd;
use App\Livewire\Hotels\HotelEdit;
use App\Livewire\Hotels\HotelList;
use App\Livewire\Login;
use App\Livewire\Rooms\RoomAdd;
use App\Livewire\Rooms\RoomList;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class);

Route::get('/Dashboard', Dashboard::class);

Route::get('/Daftar-Hotel', HotelList::class);

Route::get('/Add-Hotel', HotelAdd::class);

Route::get('/Daftar-Hotel/{id}/Edit', HotelEdit::class);

Route::get('/Room-List', RoomList::class);

Route::get('/Add-Room', RoomAdd::class);

Route::get('/Booking-List', BookingList::class);





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