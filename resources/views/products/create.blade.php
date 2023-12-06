@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h2 class="text-center text-primary">ADD NEW PRODUCT</h2>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12   ">

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf

                        <div class="row mb-3">
                            {{-- Name --}}
                            <div class="col ">
                                <div class="col-md-12">
                                    <x-adminlte-input name="name" label="Name" placeholder="Name"
                                        label-class="text-lightblue" value="{{ old('name') }}">
                                        <x-slot name="prependSlot">
                                            <div class="input-group-text">
                                                <i class="fas fa-cart-plus text-lightblue"></i>
                                            </div>
                                        </x-slot>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </x-adminlte-input>
                                </div>
                            </div>

                            {{-- Price --}}
                            <div class="col">
                                <div class="col-md-12">
                                    <x-adminlte-input name="price" label="Price" placeholder="Price" igroup-size="sm"
                                        value="{{ old('price') }}" min=1 label-class="text-warning" max=10>
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text bg-warning">
                                                <i class="fas fa-coins"></i>
                                            </div>
                                        </x-slot>
                                    </x-adminlte-input>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">

                            {{-- Stock --}}
                            <div class="col">
                                <div class="col-md-12">
                                    <x-adminlte-input name="stock" label="Stock" placeholder="Stock" igroup-size="sm"
                                        value="{{ old('stock') }}" min=1 label-class="text-info" max=10>
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text bg-info">
                                                <i class="fas fa-hashtag"></i>
                                            </div>
                                        </x-slot>
                                    </x-adminlte-input>
                                </div>
                            </div>

                            {{-- Provider --}}
                            <div class="col">
                                <div class="col-md-12">
                                    <x-adminlte-select name="provider_id" label="Provider" label-class="text-sm"
                                        id="provider_id">
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text bg-warning">
                                                <i class="fas fa-address-book"></i>
                                            </div>
                                        </x-slot>
                                        <option value="">Select a provider...</option>
                                        @foreach ($providers as $provider)
                                            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                        @endforeach
                                    </x-adminlte-select>
                                    @if ($errors->has('provider_id'))
                                        <span class="text-danger">{{ $errors->first('provider_id') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- Description --}}
                            <div class="col">
                                <div class="col-md-12">
                                    <x-adminlte-textarea name="description" label="Description" rows=5
                                        label-class="text-success" igroup-size="sm" placeholder="Insert description...">
                                        <x-slot name="prependSlot">
                                            <div class="input-group-text bg-dark">
                                                <i class="fas fa-lg fa-file-alt text-success"></i>
                                            </div>
                                        </x-slot>
                                        {{ old('description') }}
                                    </x-adminlte-textarea>
                                </div>
                            </div>

                            {{-- Category --}}
                            <div class="col">
                                <div class="col-md-12">
                                    <x-adminlte-select name="category_id" label="Category" label-class="text-sm"
                                        id="category_id">
                                        <x-slot name="appendSlot">
                                            <div class="input-group-text bg-warning">
                                                <i class="fas fa-list"></i>
                                            </div>
                                        </x-slot>
                                        <option value="">Select a category...</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </x-adminlte-select>

                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <x-adminlte-button label="Save" theme="success" icon="fas fa-save" type="submit" />
                                <a href="{{ route('products.index') }}"><x-adminlte-button label="Back" theme="secondary"
                                        icon="fas fa-arrow-left" /></a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
