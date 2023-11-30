@extends('adminlte::page')

@section('title', 'Create Category')

@section('content_header')
    <h2>Create new category</h2>
@stop

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">

        <div class="card">
            
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"></label>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" value="Add category">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary ">&larr; Back</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>    
</div>
    
@stop