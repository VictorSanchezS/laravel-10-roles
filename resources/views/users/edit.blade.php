@extends('adminlte::page')

@section('title', 'Edit '. $user->name)

@section('content_header')
    <h2>Edit User</h2>
@stop


@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start">Roles</label>
                        <div class="col-md-6">           
                            <select class="form-select @error('roles') is-invalid @enderror" multiple aria-label="Roles" id="roles" name="roles[]">
                                @forelse ($roles as $role)

                                    @if ($role!='Super Admin')
                                    <option value="{{ $role }}" {{ in_array($role, $userRoles ?? []) ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                    @else
                                        @if (Auth::user()->hasRole('Super Admin'))   
                                        <option value="{{ $role }}" {{ in_array($role, $userRoles ?? []) ? 'selected' : '' }}>
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
                    
                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start">Roles</label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Update User">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">&larr; Back</a>
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

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Password" placeholder="password" label-class="text-lightblue" type='password' >
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-lock text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- With prepend slot --}}
        <x-adminlte-input name="iUser" label="Confirm Password" placeholder="confirm password" label-class="text-lightblue" type='password' >
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-lock text-lightblue"></i>
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
        <x-adminlte-select-bs id="roles" name="roles[]" label="roles" label-class="text-danger"
            :config="$config" multiple>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-red">
                    <i class="fas fa-user-shield"></i>
                </div>
            </x-slot>
            <x-adminlte-options :options="['News', 'Sports', 'Science', 'Games']" />
        </x-adminlte-select-bs>

        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" />
        <x-adminlte-button label="Back" theme="secondary" icon="fas fa-arrow-left" />
    </div>
</div>

@stop