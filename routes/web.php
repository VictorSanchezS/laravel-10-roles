<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Models\Provider;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

use Illuminate\Support\Facades\App;

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

// Route::get('/', function () { //si tengo problmeas a futuro crear una controlador para esta ruta
//     if(Route::has('login')){
//         return view('/home');
//     }
//     return view('auth.login');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'providers' => ProviderController::class,
]);

Route::get('/products/search', 'ProductController@search')->name('products.search');

//Route::get('/providers/download-pdf', [ProviderController::class, 'downloadPdf'])->name('providers.download-pdf');

Route::get('/download-pdf/providers', function () {

    $providers = Provider::all();

    // Convierte la colección a un array
    $providersArray = $providers->toArray();

    $pdf = PDF::loadView('providers.pdf', ['providers' => $providersArray]);
    
    return $pdf->download();
})->name('download-pdf.providers');