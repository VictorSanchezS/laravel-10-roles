@extends('adminlte::page')

@section('title', 'Create Rol')

@section('content_header')
    <h2 class="text-center">ADD NEW ROLE</h2>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="name" label="Name" placeholder="Enter name" fgroup-class="col-md-6"
                                value="{{ old('name') }}">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-user-shield text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>

                        {{-- Permissions --}}
                        <div class="mb-3 row">
                            <label for="permissions"
                                class="col-md-2 col-form-label text-md-end text-start">Permissions</label>
                            <div class="col-md-4">
                                <select class="form-select @error('permissions') is-invalid @enderror" multiple
                                    aria-label="Permissions" id="permissions" name="permissions[]" style="height: 210px;">
                                    @forelse ($permissions as $permission)
                                        <option value="{{ $permission->id }}"
                                            {{ in_array($permission->id, old('permissions') ?? []) ? 'selected' : '' }}>
                                            {{ $permission->name }}
                                        </option>
                                    @empty
                                    @endforelse
                                </select>
                                @if ($errors->has('permissions'))
                                    <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                @endif
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="mb-3 row">
                            <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                                icon="fas fa-lg fa-save" />
                            <div class="col-md-6">
                                <a href="{{ route('roles.index') }}"><x-adminlte-button label="Back" theme="secondary"
                                        icon="fas fa-arrow-left" /></a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
