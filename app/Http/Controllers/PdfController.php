<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Provider;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


class PdfController extends Controller
{
    public function pdfProducts()
    {
        $products = Product::all();

        // Convierte la colección a un array
        $productsArray = $products->toArray();

        $pdf = PDF::loadView('pdf.products', ['products' => $productsArray]);

        return $pdf->download();
    }

    public function pdfProviders()
    {
        $providers = Provider::orderBy('name')->get();

        // Convierte la colección a un array
        $providersArray = $providers->toArray();

        $pdf = PDF::loadView('pdfs.providers', ['providers' => $providersArray]);

        return $pdf->download();
    }
}
