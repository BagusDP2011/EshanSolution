<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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

    // $produk1 = asset('..\images\produk\produk1.png');
    // $produk2 = asset('CCTV\resources\images\produk\produk2.jpg');
    // $produk3 = asset('..\images\produk\produk3.jpg');

    $produk1 = 'https://iili.io/2p4T3UG.md.png';
    $produk2 = 'https://iili.io/2p4I6V1.md.jpg';
    $produk3 = 'https://iili.io/2p4I4oP.md.jpg';

    return view('Home', [
        'produk1' => $produk1,
        'produk2' => $produk2,
        'produk3' => $produk3
    ]);
});

Route::get('/aboutus', function () {

    $produk1 = 'https://iili.io/2p4T3UG.md.png';
    $produk2 = 'https://iili.io/2p4I6V1.md.jpg';
    $produk3 = 'https://iili.io/2p4I4oP.md.jpg';

    return view('AboutUs', [
        'produk1' => $produk1,
        'produk2' => $produk2,
        'produk3' => $produk3
    ]);
});

Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak/kirim', [HomeController::class, 'submit'])->name('kontak.submit');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
