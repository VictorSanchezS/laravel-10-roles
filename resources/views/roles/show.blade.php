@extends('adminlte::page')

@section('title', 'Show ' . $role->name)

@section('content_header')
    <h2 class="text-primary text-center">ROLE INFOMATION</h2>
@stop


@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $role->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Permissions</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @if ($role->name=='Super Admin')
                                <span class="badge bg-primary">All</span>
                            @else
                                @forelse ($rolePermissions as $permission)
                                    <span class="badge bg-success">{{ $permission->name }}</span>
                                @empty
                                @endforelse
                            @endif
                        </div>
                    </div>
                    <div class="float-end">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong></strong></label>
                        <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
            </div>
        </div>
    </div>
</div>    
@endsection
