@extends('adminlte::page')

@section('title', 'Show ', $product->name)

@section('content_header')
    <h2 class="text-center text-primary">PRODUCTO INFORMATION</h2>
@stop


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <x-adminlte-input name="name" label="Name" disabled
                                label-class="text-lightblue" value="{{ $product->name }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-cart-plus text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>

                    {{-- With prepend slot, sm size and label --}}
                    <div class="mb-3 row">
                        <div class="col-md-8">
                            <x-adminlte-textarea name="description" label="Description" rows=5 disabled
                                label-class="text-success" igroup-size="sm" placeholder="Insert description...">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text bg-dark">
                                        <i class="fas fa-lg fa-file-alt text-success"></i>
                                    </div>
                                </x-slot>
                                {{ $product->description }}
                            </x-adminlte-textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <x-adminlte-input name="name" label="Category" disabled
                                label-class="text-lightblue" value="{{ $product->category->name ?? 'None' }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-cart-plus text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <x-adminlte-input name="name" label="Provider" disabled
                                label-class="text-lightblue" value="{{ $product->provider->name ?? 'None' }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-cart-plus text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('products.index') }}"><x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" /></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
@stop
