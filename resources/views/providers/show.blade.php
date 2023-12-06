@extends('adminlte::page')

@section('title', 'Show ' . $provider->name)

@section('content_header')
    <h2 class="text-center text-primary">PROVIDER INFORMATION</h2>
@stop


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body">

                    {{-- Name --}}
                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Name</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->name }}
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Email</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->email }}
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Phone</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->phone }}
                        </div>
                    </div>

                    {{-- Country --}}
                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Country</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->country }}
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Address</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->address }}
                        </div>
                    </div>

                    {{-- Buttons --}}
                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <div class="float-end col-md-6">
                            <a href="{{ route('providers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
