@extends('adminlte::page')

@section('title', 'Edit ' . $category->name)

@section('content_header')
    <h2 class="text-center text-primary">EDIT CATEGORY</h2>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        {{-- With label, invalid feedback disabled and form group class --}}
                        <x-adminlte-input name="name" label="Name" placeholder="Name" label-class="text-lightblue"
                            value="{{ $category->name }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-briefcase text-lightblue"></i>
                                </div>
                            </x-slot>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </x-adminlte-input>

                        
                        {{-- With prepend slot, sm size and label --}}
                        <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-warning" fgroup-class="col-md-12"
                            id="description" name="description" igroup-size="sm" placeholder="Insert description...">
                            {{ $category->description }}
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-warning"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-textarea>

                        <div class="mb-3 row">
                            <x-adminlte-button label="Save" theme="success" icon="fas fa-save" type="submit" />
                                <div class="col-md-6">
                                    <a href="{{ route('categories.index') }}"><x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" /></a>
                                </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    
@stop
