@extends('adminlte::page')

@section('title', 'Edit ' . $category->name)

@section('content_header')
    <h2 class="text-center">EDIT CATEGORY</h2>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $category->name }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description"
                                class="col-md-4 col-form-label text-md-end text-start">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $category->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-md-4 col-form-label text-md-end text-start"></label>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Update">
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary">&larr; Back</a>
                            </div>
                        </div>

                    </form>
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
                placeholder="Insert description...">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lg fa-file-alt text-warning"></i>
                    </div>
                </x-slot>
            </x-adminlte-textarea>

            <x-adminlte-button label="Primary" theme="primary" icon="fas fa-key" />
            <x-adminlte-button label="Secondary" theme="secondary" icon="fas fa-hashtag" />

        </div>
    </div>

@stop
