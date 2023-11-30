@extends('adminlte::page')

@section('title', 'Show '.$category->name)

@section('content_header')
    <h2>Category Information</h2>
@stop


@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">

        <div class="card">
            
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $category->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $category->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection