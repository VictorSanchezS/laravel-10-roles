@extends('adminlte::page')

@section('title', 'Show ', $product->name)

@section('content_header')
    <h2 class="text-center text-primary">PRODUCT INFORMATION</h2>
@stop



@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow p-3 mb-5 bg-body rounded">

                <div class="card-body">

                    <div class="row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Name</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Description</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Price</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->price }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Stock</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->stock }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Category</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->category->name ?? 'None' }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Provider</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->provider->name ?? 'None' }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <div class="float-end col-md-6">
                            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
