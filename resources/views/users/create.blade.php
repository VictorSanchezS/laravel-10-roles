@extends('adminlte::page')

@section('title', 'Create User')

@section('content_header')
    <h2 class="text-center text-primary">ADD USER</h2>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf

                        <div class="row mb-3">

                            {{-- Name --}}
                            <div class="col">
                                <x-adminlte-input name="name" label="Name" placeholder="name"
                                    label-class="text-lightblue" value="{{ old('name') }}">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user-shield text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                            {{-- Email --}}
                            <div class="col">
                                <x-adminlte-input name="email" label="Email" placeholder="email"
                                    label-class="text-lightblue" value="{{ old('email') }}" type="email">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-at text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                        </div>

                        <div class="row mb-3">

                            {{-- Password --}}
                            <div class="col">
                                <x-adminlte-input name="password" label="Password" placeholder="password"
                                    label-class="text-lightblue" type='password'>
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                            {{-- With prepend slot --}}
                            <div class="col">
                                <x-adminlte-input name="password_confirmation" label="Confirm Password"
                                    placeholder="confirm password" label-class="text-lightblue" type='password'>
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <label for="roles" class="col-md-2 col-form-label text-md-end text-start">Roles</label>
                            <div class="col-md-2">
                                <select class="form-select @error('roles') is-invalid @enderror" multiple aria-label="Roles"
                                    id="roles" name="roles[]">
                                    @forelse ($roles as $role)

                                        @if ($role != 'Super Admin')
                                            <option value="{{ $role }}"
                                                {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                {{ $role }}
                                            </option>
                                        @else
                                            @if (Auth::user()->hasRole('Super Admin'))
                                                <option value="{{ $role }}"
                                                    {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                    {{ $role }}
                                                </option>
                                            @endif
                                        @endif

                                    @empty

                                    @endforelse
                                </select>
                                @if ($errors->has('roles'))
                                    <span class="text-danger">{{ $errors->first('roles') }}</span>
                                @endif
                            </div>
                        </div>

                                                    
                        {{-- Buttons --}}
                        <div class="mb-3 row justify-content-end">
                            <a href="{{ route('users.index') }}">
                                <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left"
                                    class="rounded-2" class="mr-2" />
                            </a>
                            <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                                class="rounded-2" icon="fas fa-lg fa-save" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
