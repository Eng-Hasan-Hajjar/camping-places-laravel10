<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGroundController;




#camping grounds
//Route::get('/adminpanel/campGround/{id}/edit','CampGroundController@edit');
Route::resource('/adminpanel/campGround','CampGroundController');
//Route::get('/adminpanel/campGround/{id}/delete','CampGroundController@destroy');


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/n', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('campground', function () {
    return view('');
})->middleware(['auth', 'verified'])->name('campground');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/////////////////////////////////////---CampGround


Route::middleware(['auth'])->group(function () {

    Route::get('/campground', [CampgroundController::class, 'index'])->name('campground');

});
