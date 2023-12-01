@extends('adminlte::page')

@section('title', 'Edit '. $product->name)

@section('content_header')
    <h2>Edit Product</h2>
@stop

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">

        <div class="card">
            
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>
                        <div class="col-md-6">
                          <input type="number" step="any" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="stock" class="col-md-4 col-form-label text-md-end text-start">Stock</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $product->stock }}">
                            @if ($errors->has('stock'))
                                <span class="text-danger">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-4 col-form-label text-md-end text-start">Category:</label>
                        <div class="col-md-6">
                            <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) {{'selected'}} @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="provider_id" class="col-sm-4 col-form-label text-md-end text-start">provider:</label>
                        <div class="col-md-6">
                            <select name="provider_id" id="provider_id" class="form-select @error('provider_id') is-invalid @enderror">
                                <option value="">Select Provider</option>
                                @foreach ($providers as $provider)
                                    <option value="{{ $provider->id }}" @if ($provider->id == $product->provider_id) {{'selected'}} @endif>{{ $provider->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('provider_id'))
                                    <span class="text-danger">{{ $errors->first('provider_id') }}</span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-4 col-form-label text-md-end text-start"></label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Update">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">&larr; Back</a>
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
<div class="card">
    <div class="card-body">



        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Name" placeholder="Name" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-box text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot, sm size and label --}}
        <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-success" igroup-size="sm"
            placeholder="Insert description...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-success"></i>
                </div>
            </x-slot>
        </x-adminlte-textarea>



        {{-- With append slot, number type and sm size --}}
        <x-adminlte-input name="iNum" label="Price" placeholder="Price" type="number" igroup-size="sm" min=1
            label-class="text-warning" max=10>
            <x-slot name="appendSlot">
                <div class="input-group-text bg-warning">
                    <i class="fas fa-coins"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With append slot, number type and sm size --}}
        <x-adminlte-input name="iNum" label="Stock" placeholder="Stock" type="number" igroup-size="sm" min=1
            label-class="text-info" max=10>
            <x-slot name="appendSlot">
                <div class="input-group-text bg-info">
                    <i class="fas fa-hashtag"></i>
                </div>
            </x-slot>
        </x-adminlte-input>


        {{-- Example with empty option (for Select2) --}}
        <x-adminlte-select2 name="optionsVehicles" label-class="text-lightblue" label-class="text-secondary"
            data-placeholder="Select an option...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-secondary">
                    <i class="fas fa-fw fa-list"></i>
                </div>
            </x-slot>
            <x-adminlte-options :options="['Car', 'Truck', 'Motorcycle']" empty-option />
        </x-adminlte-select2>

        {{-- Example with empty option (for Select2) --}}
        <x-adminlte-select2 name="optionsVehicles" label-class="text-lightblue"
            data-placeholder="Select an option...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-lightblue">
                    <i class="fas fa-fw fa-address-book"></i>
                </div>
            </x-slot>
            <x-adminlte-options :options="['Car', 'Truck', 'Motorcycle']" empty-option />
        </x-adminlte-select2>

        <x-adminlte-button label="Save" theme="success" icon="fas fa-save" />
        <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" />
    </div>
</div>
@stop