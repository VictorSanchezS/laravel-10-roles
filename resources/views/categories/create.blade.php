@extends('adminlte::page')

@section('title', 'Create Category')

@section('content_header')
    <h2 class="text-center text-primary">ADD NEW CATEGORY</h2>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf

                        {{-- With label, invalid feedback disabled and form group class --}}
                        <div class="row">
                            <x-adminlte-input name="iLabel" label="Name" placeholder="Name Category" name="name"
                                label-class="text-success " value="{{ old('name') }}" id="name"
                                fgroup-class="col-md-6" disable-feedback />

                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger text-sm mt-1">{{ $errors->first('name') }}</span>
                        @endif

                        {{-- With prepend slot, sm size and label --}}
                        <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-warning"
                            id="description" name="description" igroup-size="sm" placeholder="Insert description...">
                            {{ old('description') }}
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-warning"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-textarea>

                        <div class="mb-3 row">
                            <x-adminlte-button label="Save" theme="success" icon="fas fa-save" type="submit" />
                            <div class="col-md-6">
                                {{-- <a href="{{ route('categories.index') }}"><x-adminlte-button label="Secondary" theme="secondary" icon="fas fa-arrow-left" /></a> --}}
                                <div class="col-md-6">
                                    {{-- <input type="submit" class="btn btn-primary" value="Add category"> --}}
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary ">&larr; Back</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@stop
