<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampGroundController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CampDoctorGuidController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AdminDashboardController;
Route::get('locale/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
})->name('locale.change');
Route::get('showallcamp', [CampGroundController::class, 'showAllCamp'])->name('showallcamp.showAllCamp');
Route::get('singelcamp/{id}',[CampGroundController::class, 'showSingle'])->name('singelcamp.showSingle');
Route::get('forest',[CampGroundController::class, 'forest'])->name('camp.forest');
Route::get('desert',[CampGroundController::class, 'desert'])->name('camp.desert');
Route::get('mountain',[CampGroundController::class, 'mountain'])->name('camp.mountain');
Route::get('ratings', [RatingController::class, 'index'])->name('ratings.index');

Route::get('/',[CampGroundController::class, 'showCampgrounds']);




// روابط CRUD الخاصة بـ CampDoctorGuid
Route::resource('adminpanel/camp_doctor_guid', CampDoctorGuidController::class);
Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
Route::get('/camp-grounds/{camp_ground_id}/ratings', [RatingController::class, 'show'])->name('ratings.show');
Route::get('/campgrounds/{id}/ratings', [CampgroundController::class, 'showRatings'])->name('campground.ratings');
// routes/web.php
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/n', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
#-------------camping grounds
Route::middleware(['auth'])->group(function () {
    Route::resource('/adminpanel/campground', CampGroundController::class);
});
#-------------reservation routes
Route::middleware(['auth'])->group(function () {
    Route::resource('/adminpanel/reservations', ReservationController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('/adminpanel/doctors', DoctorController::class);
    Route::resource('/adminpanel/guides', GuideController::class);
    Route::resource('/adminpanel/visitors', VisitorController::class);
    Route::post('/adminpanel/visitor', [VisitorController::class, 'input'])->name('visitors.input');
    Route::get('/adminpanel/visitor', [VisitorController::class, 'input'])->name('visitors.input');
    Route::get('/visitors/user/{userId}', [VisitorController::class, 'showVisitorByUserId'])->name('visitors.showByUserId');
});

