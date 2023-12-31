@extends('adminlte::page')

@section('title', 'Create Provider')

@section('content_header')
    <h2 class="text-center text-primary ">ADD NEW PROVIDER</h2>
@stop


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('providers.store') }}" method="post">
                        @csrf

                        <div class="row mb-3">
                            {{-- Name --}}
                            <div class="col">
                                <x-adminlte-input name="name" label="Name" placeholder="Enter name"
                                    fgroup-class="col-md-12" value="{{ old('name') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-address-book text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                            {{-- Email --}}
                            <div class="col">
                                <x-adminlte-input name="email" label="Email Address" type="email"
                                    placeholder="Enter email" fgroup-class="col-md-12" value="{{ old('email') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-at text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- Phone --}}
                            <div class="col">
                                <x-adminlte-input name="phone" label="Phone" placeholder="Enter phone"
                                    fgroup-class="col-md-12" value="{{ old('phone') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                            {{-- Country --}}
                            <div class="col">
                                <x-adminlte-input name="country" label="Country" placeholder="Enter country"
                                    fgroup-class="col-md-12" value="{{ old('country') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flag text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                        </div>


                        <div class="row mb-3">

                            {{-- City --}}
                            <div class="col">
                                <x-adminlte-input name="city" label="City" placeholder="Enter city"
                                    fgroup-class="col-md-12" value="{{ old('city') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-city text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                            {{-- Address --}}
                            <div class="col">
                                <x-adminlte-input name="address" label="Address" placeholder="Enter address"
                                    fgroup-class="col-md-12" value="{{ old('address') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-home text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                        </div>

                        {{-- Buttons --}}
                        <div class="mb-3 row justify-content-end">
                            <a href="{{ route('providers.index') }}">
                                <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left"
                                    class="rounded-2" class="mr-2" />
                            </a>
                            <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                                class="rounded-2" icon="fas fa-lg fa-save" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




@stop
