@extends('adminlte::page')

@section('title', 'Show ' . $category->name)

@section('content_header')
    <h2 class="text-center">CATEGORY INFORMATION</h2>
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
                            {{ $category->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $category->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description"
                            class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            {{-- With label, invalid feedback disabled and form group class --}}
            <div class="row">
                <x-adminlte-input name="iLabel" label="Name" placeholder="Name Category" fgroup-class="col-md-6"
                    disable-feedback />
            </div>

            {{-- With prepend slot, sm size and label --}}
            <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-warning" igroup-size="sm"
                placeholder="Insert description..." disabled>
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lg fa-file-alt text-warning"></i>
                    </div>
                </x-slot>
            </x-adminlte-textarea>

            <x-adminlte-button label="Secondary" theme="secondary" icon="fas fa-hashtag" />

        </div>
    </div>

@stop
