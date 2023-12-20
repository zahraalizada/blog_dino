<?php


use App\Http\Controllers\ProfileController;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');



Route::group(['middleware' => ['setlocale'], 'prefix' => '{locale?}'], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/login',[AuthController::class,'login'])->name('login');
        Route::post('/getlogin',[AuthController::class,'getlogin'])->name('getlogin');
        Route::get('/register',[AuthController::class,'register'])->name('register');
        Route::post('/getregister',[AuthController::class,'getregister'])->name('getregister');
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

        Route::group(['middleware' => ['admin']],function (){
            Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
            Route::resource('questanswer', QuestAnswerController::class);
        });

    });

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
