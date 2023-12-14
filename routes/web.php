<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Models\Provider;
use App\Models\Product;
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

//Route::get('/download-pdf/products', 'PdfController@pdfProducts')->name('download-pdf.products');
Route::get('/download-pdf/products', function () {
    $products = Product::orderBy('name')->get();

    $productsArray = $products->toArray();

    $pdf = PDF::loadView('pdfs.products', ['products' => $productsArray]);

    return $pdf->download();
})->name('download-pdf.products');

//Route::get('/download-pdf/providers', 'PdfController@pdfProviders')->name('download-pdf.providers');
Route::get('/download-pdf/providers', function () {

    $providers = Provider::orderBy('name')->get();

    // Convierte la colección a un array
    $providersArray = $providers->toArray();

    $pdf = PDF::loadView('pdfs.providers', ['providers' => $providersArray]);

    return $pdf->download();
})->name('download-pdf.providers');

