<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGroundController;





Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/n', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/////////////////////////////////////---CampGround


Route::get('/campground', function () {
    return view('backend.campGround');
})->middleware(['auth', 'verified'])->name('campground');

Route::middleware(['auth'])->group(function () {

    Route::get('/campground', [CampgroundController::class, 'index'])->name('campground');

});


#-------------camping grounds

Route::resource('/adminpanel/campground', CampGroundController::class);

