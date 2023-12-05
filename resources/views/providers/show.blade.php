@extends('adminlte::page')

@section('title', 'Show ' . $provider->name)

@section('content_header')
    <h2>Provider Information</h2>
@stop


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    {{-- Name --}}
                    <div class="mb-3 row">
                        <x-adminlte-input name="name" label="Name" placeholder="Enter name" fgroup-class="col-md-4"
                            disabled value="{{ $provider->name }}">
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
                            disabled fgroup-class="col-md-4" value="{{ $provider->email }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-at text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>

                    {{-- Phone --}}
                    <div class="mb-3 row">
                        <x-adminlte-input name="phone" label="Phone" placeholder="Enter phone" disabled
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
                        <x-adminlte-input name="country" label="Country" placeholder="Enter country" disabled
                            fgroup-class="col-md-4" value="{{ $provider->country }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-flag text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>

                    {{-- Address --}}
                    <div class="mb-3 row">
                        <x-adminlte-input name="address" label="Address" placeholder="Enter address" disabled
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
                        <div class="col-md-6">
                            <a href="{{ route('providers.index') }}"><x-adminlte-button label="Back" theme="secondary"
                                    icon="fas fa-arrow-left" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
