@extends('adminlte::page')

@section('title', 'Edit ' . $provider->name)

@section('content_header')
    <h2 class="text-center text-primary">EDIT PROVIDER</h2>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('providers.update', $provider->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        {{-- Name --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="name" label="Name" placeholder="Enter name" fgroup-class="col-md-4"
                                value="{{ $provider->name }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-address-book text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="email" label="Email Address" type="email" placeholder="Enter email"
                                fgroup-class="col-md-4" value="{{ $provider->email }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-at text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- Phone --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="phone" label="Phone" placeholder="Enter phone"
                                fgroup-class="col-md-4" value="{{ $provider->phone }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- Country --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="country" label="Country" placeholder="Enter country"
                                fgroup-class="col-md-4" value="{{ $provider->country }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-flag text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- City --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="city" label="City" placeholder="Enter city" fgroup-class="col-md-4"
                                value="{{ $provider->city }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-city text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- Address --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="address" label="Address" placeholder="Enter address"
                                fgroup-class="col-md-4" value="{{ $provider->address }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-home text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- Buttons --}}
                        <div class="mb-3 row">
                            <x-adminlte-button type="submit" label="Update" theme="success" icon="fas fa-lg fa-save" />
                            <div class="col-md-6">
                                <a href="{{ route('providers.index') }}"><x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" /></a>
                            </div>
                        </div>

                        {{-- {{ $provider}} --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
