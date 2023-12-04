@extends('adminlte::page')

@section('title', 'Show ' . $category->name)

@section('content_header')
    <h2 class="text-center text-primary">CATEGORY INFORMATION</h2>
@stop


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">

                    {{-- With label, invalid feedback disabled and form group class --}}
                    <div class="row">
                        <x-adminlte-input name="iLabel" label="Name" placeholder="Name Category" name="name" disabled
                            label-class="text-success " value="{{ $category->name }}" id="name"
                            fgroup-class="col-md-6" disable-feedback />
                    </div>
                    
                    {{-- With prepend slot, sm size and label --}}
                    <div class="row">
                        <x-adminlte-input name="iLabel" label="Description" placeholder="{{ $category->description }}" name="description" disabled
                            label-class="text-warning " value="{{ $category->name }}" id="name"
                            fgroup-class="col-md-6" disable-feedback />
                    </div>

                    <div class="mb-3 row">
                            <div class="col-md-6">
                                <a href="{{ route('categories.index') }}"><x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" /></a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop
