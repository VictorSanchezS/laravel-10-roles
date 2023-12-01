@extends('adminlte::page')

@section('title', 'Edit '.$provider->name)

@section('content_header')
    <h2 class="text-center">EDIT PROVIDER</h2>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">
                <form action="{{ route('providers.update', $provider->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $provider->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $provider->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start">Phone</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $provider->phone }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="country" class="col-md-4 col-form-label text-md-end text-start">Country</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ $provider->country }}">
                            @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="city" class="col-md-4 col-form-label text-md-end text-start">City</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ $provider->city }}">
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start">Address</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $provider->address }}">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end text-start"></label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Update provider">
                        <a href="{{ route('providers.index') }}" class="btn btn-secondary">&larr; Back</a>
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
        <x-adminlte-input name="iUser" label="Name" placeholder="name" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-address-book text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Email" placeholder="email" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-at text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Phone" placeholder="phone" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-phone text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Country" placeholder="country" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-flag text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="City" placeholder="city" label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-city text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Address" placeholder="address" label-class="text-lightblue">
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