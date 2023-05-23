<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUmkmController;
use App\Http\Controllers\DashboardWisataController;
use App\Http\Controllers\DashbooardAboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmkmController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home',
        'posts' => Post::latest()->take(3)->get()
    ]);
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/wisata', function () {
    return view('wisata', [
        'title' => 'Wisata'
    ]);
});

Route::get('/umkm', [UmkmController::class, 'index']);
Route::get('/umkm/{umkm:slug}', [UmkmController::class, 'show']);

Route::get('/blogs', [PostController::class, 'index']);
Route::get('/blog/{blog:slug}', [PostController::class, 'show']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware(['auth', 'verified']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware(['isAdmin', 'verified']);

Route::get('/dashboard/umkm/checkSlug', [DashboardUmkmController::class, 'checkSlug'])->middleware(['auth', 'verified']);
Route::get('/dashboard/umkm/pengajuan', [DashboardUmkmController::class, 'pengajuan'])->middleware(['isAdmin', 'verified']);

Route::resource('/dashboard/umkm', DashboardUmkmController::class)->middleware(['verified']);

Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice/{invoice:order_id}', [OrderController::class, 'invoice'])->middleware(['auth', 'verified']);

Route::get('/dashboard/about/checkSlug', [DashbooardAboutController::class, 'checkSlug'])->middleware(['auth', 'verified']);
Route::resource('/dashboard/about', DashbooardAboutController::class)->middleware(['isAdmin', 'verified'])->except(['show']);

Route::delete('/dashboard/wisata/{order}', [DashboardWisataController::class, 'destroy'])->middleware(['isAdmin', 'verified']);
// Mengikat model Wisata ke parameter 'wisata'
Route::resource('/dashboard/wisata', DashboardWisataController::class)->middleware(['isAdmin', 'verified'])->except(['create', 'store', 'show', 'edit', 'update']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
