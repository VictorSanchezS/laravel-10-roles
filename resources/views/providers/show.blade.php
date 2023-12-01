@extends('adminlte::page')

@section('title', 'Show     '.$provider->name)

@section('content_header')
    <h2>Provider Information</h2>
@stop


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->phone }}
                        </div>
                    </div> 

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <div class="col-md-6" >
                            <a href="{{ route('providers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
</div>    

<div class="card">
    <div class="card-body">
        
        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Name" placeholder="name" label-class="text-lightblue" disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-address-book text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Email" placeholder="email" label-class="text-lightblue" disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-at text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Phone" placeholder="phone" label-class="text-lightblue" disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-phone text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Country" placeholder="country" label-class="text-lightblue" disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-flag text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="City" placeholder="city" label-class="text-lightblue" disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-city text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Address" placeholder="address" label-class="text-lightblue" disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-home text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
            icon="fas fa-lg fa-save" />
        <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" />


    </div>
</div>

@stop