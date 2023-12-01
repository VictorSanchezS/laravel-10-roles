@extends('adminlte::page')

@section('title', 'Show ', $product->name)

@section('content_header')
    <h2>Product Information</h2>
@stop


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="category_name"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Category:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->category->name ?? 'None' }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="provider_name"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Provider:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->provider->name ?? 'None' }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <div class="col-md-6">
                            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">



            {{-- With prepend slot --}}
            <x-adminlte-input name="iUser" label="Name" placeholder="Name" label-class="text-lightblue" disabled>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-box text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            {{-- With prepend slot, sm size and label --}}
            <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-success" igroup-size="sm"
                placeholder="Insert description..." disabled>
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lg fa-file-alt text-success"></i>
                    </div>
                </x-slot>
            </x-adminlte-textarea>



            {{-- With append slot, number type and sm size --}}
            <x-adminlte-input name="iNum" label="Price" placeholder="Price" type="number" igroup-size="sm" min=1 disabled
                label-class="text-warning" max=10>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-warning">
                        <i class="fas fa-coins"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            {{-- With append slot, number type and sm size --}}
            <x-adminlte-input name="iNum" label="Stock" placeholder="Stock" type="number" igroup-size="sm" min=1 disabled
                label-class="text-info" max=10>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-info">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>


            {{-- Example with empty option (for Select2) --}}
            <x-adminlte-select2 name="optionsVehicles" label-class="text-lightblue" label-class="text-secondary" disabled
                data-placeholder="Select an option...">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-secondary">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                </x-slot>
                <x-adminlte-options :options="['Car', 'Truck', 'Motorcycle']" empty-option />
            </x-adminlte-select2>

            {{-- Example with empty option (for Select2) --}}
            <x-adminlte-select2 name="optionsVehicles" label-class="text-lightblue" data-placeholder="Select an option..." disabled>
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-lightblue">
                        <i class="fas fa-fw fa-address-book"></i>
                    </div>
                </x-slot>
                <x-adminlte-options :options="['Car', 'Truck', 'Motorcycle']" empty-option />
            </x-adminlte-select2>

            <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" />
        </div>
    </div>

@stop
