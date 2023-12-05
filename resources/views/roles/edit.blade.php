@extends('adminlte::page')

@section('title', 'Edit ' . $role->name)

@section('content_header')
    <h2 class="text-center">ADD ROLE</h2>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        {{-- Name --}}
                        <div class="mb-3 row">
                            <x-adminlte-input name="name" label="Name" placeholder="Enter name" fgroup-class="col-md-6"
                                value="{{ $role->name }}">
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
                                class="col-md-4 col-form-label text-md-end text-start">Permissions</label>
                            <div class="col-md-6">
                                <select class="form-select @error('permissions') is-invalid @enderror" multiple
                                    aria-label="Permissions" id="permissions" name="permissions[]" style="height: 210px;">
                                    @forelse ($permissions as $permission)
                                        <option value="{{ $permission->id }}"
                                            {{ in_array($permission->id, $rolePermissions ?? []) ? 'selected' : '' }}>
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
