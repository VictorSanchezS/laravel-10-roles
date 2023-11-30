@extends('adminlte::page')

@section('title', 'Show     '.$provider->name)

@section('content_header')
    <h2>Provider Information</h2>
@stop


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $provider->phone }}
                        </div>
                    </div> 

                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <div class="col-md-6" >
                            <a href="{{ route('providers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
</div>    
@endsection