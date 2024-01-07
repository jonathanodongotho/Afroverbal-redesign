<?php

use App\Livewire\AdminHome;
use App\Livewire\ContextPage;
use App\Livewire\HomePage;
use App\Livewire\AllProverbs;
use App\Livewire\DatailsPage;
use App\Livewire\PrivacyPage;
use App\Livewire\SearchPage;
use App\Livewire\TribesPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', HomePage::class);

Route::get('/proverbs', AllProverbs::class);

Route::get('/proverb/{slug}', DatailsPage::class);

Route::get('/proverbs/tribes/{tribe}', TribesPage::class);

Route::get('/proverbs/contexts/{context}', ContextPage::class);

Route::get('/search', SearchPage::class);

Route::get('/privacy', PrivacyPage::class);

Route::get('/admin', AdminHome::class);

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
