@extends('adminlte::page')

@section('title', 'Show ' . $role->name)

@section('content_header')
    <h2 class="text-primary">ROLE INFOMATION</h2>
@stop


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                    {{-- Name --}}
                    <div class="mb-3 row">
                    <x-adminlte-input name="iUser" label="Name" placeholder="name" label-class="text-lightblue" fgroup-class="col-md-3"
                        value="{{ $role->name }}" disabled>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user-shield text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>

                    {{-- Permissions --}}
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

                    <a href="{{ route('roles.index') }}"><x-adminlte-button label="Back" theme="secondary"
                            icon="fas fa-arrow-left" /></a>
                </div>
            </div>
        </div>
    </div>

@stop
