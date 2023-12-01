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

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="permissions"
                                class="col-md-4 col-form-label text-md-end text-start">Permissions</label>
                            <div class="col-md-6">
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

                        <div class="mb-3 row">

                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Add Role">
                                <a href="{{ route('roles.index') }}" class="btn btn-secondary">&larr; Back</a>
                            </div>
                        </div>

                    </form>
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

            {{-- Example with multiple selections (for SelectBs) --}}
            @php
                $config = [
                    'title' => 'Select multiple options...',
                    'liveSearch' => true,
                    'liveSearchPlaceholder' => 'Search...',
                    'showTick' => true,
                    'actionsBox' => true,
                ];
            @endphp
            <x-adminlte-select-bs id="permissions" name="permissions[]" label="Permissions" label-class="text-danger"
                :config="$config" multiple>
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-red">
                        <i class="fas fa-user-lock"></i>
                    </div>
                </x-slot>
                <x-adminlte-options :options="['News', 'Sports', 'Science', 'Games']" />
            </x-adminlte-select-bs>

            <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" />
            <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" />
        </div>
    </div>



@stop
