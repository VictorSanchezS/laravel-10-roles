@extends('adminlte::page')

@section('title', 'User '.$user->name)

@section('content_header')
    <h2 class="text-center text-primary">USER INFORMATION</h2>
@stop


@section('content')
<div class="row justify-content-center ">
    <div class="col-md-4 ">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
           
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Email Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start text-info"><strong>Roles:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @forelse ($user->getRoleNames() as $role)
                                <span class="badge bg-success">{{ $role }}</span>
                            @empty
                            @endforelse
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <div class="col-md-6">
                            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>    

@stop