@extends('adminlte::page')

@section('title', 'User '.$user->name)

@section('content_header')
    <h2>User Information</h2>
@stop


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
           
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Roles:</strong></label>
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

<div class="card">
    <div class="card-body">

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Name" placeholder="name" label-class="text-lightblue" >
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user-shield text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Email" placeholder="email" label-class="text-lightblue" type="email" >
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-at text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>


        {{-- Example with multiple selections (for SelectBs) --}}
        <div class="mb-3 row">
            <label for="roles" class="col-md-1 col-form-label text-md-end text-start text-lightblue"><strong>Roles</strong></label>
            <div class="col-md-8" style="line-height: 35px;">
                @forelse ($user->getRoleNames() as $role)
                    <span class="badge bg-success">{{ $role }}</span>
                @empty
                @endforelse
            </div>
        </div>

        <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" />
    </div>
</div>


@stop