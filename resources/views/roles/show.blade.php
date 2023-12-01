@extends('adminlte::page')

@section('title', 'Show ' . $role->name)

@section('content_header')
    <h2>Role Information</h2>
@stop


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $role->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Permissions:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @if ($role->name == 'Super Admin')
                                <span class="badge bg-primary">All</span>
                            @else
                                @forelse ($rolePermissions as $permission)
                                    <span class="badge bg-success">{{ $permission->name }}</span>
                                @empty
                                @endforelse
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6">
                            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            {{-- With prepend slot --}}
            <x-adminlte-input name="iUser" label="Name" placeholder="name" label-class="text-lightblue">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user-shield text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <div class="mb-3 row">
                <label for="roles"
                    class="col-md-6 col-form-label text-md-end text-start text-lightblue"><strong>Permissions</strong></label>
                <div class="col-md-8" style="line-height: 35px;">
                    @if ($role->name == 'Super Admin')
                        <span class="badge bg-primary">All</span>
                    @else
                        @forelse ($rolePermissions as $permission)
                            <span class="badge bg-success">{{ $permission->name }}</span>
                        @empty
                        @endforelse
                    @endif
                </div>
            </div>
            
            <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left"/>
        </div>
    </div>
@stop
