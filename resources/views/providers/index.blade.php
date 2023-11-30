@extends('adminlte::page')

@section('title', 'Providers')

@section('content_header')
    <h2>Providers List</h2>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @can('create-provider')
            <a href="{{ route('providers.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Provider</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($providers as $provider)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $provider->name }}</td>
                    <td>{{ $provider->email }}</td>
                    <td>{{ $provider->phone }}</td>
                    <td>{{ $provider->country }}</td>
                    <td>{{ $provider->city }}</td>
                    <td>{{ $provider->address }}</td>
                    <td>
                        <form action="{{ route('providers.destroy', $provider->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('providers.show', $provider->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-provider')
                                <a href="{{ route('providers.edit', $provider->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-provider')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this provider?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="8">
                        <span class="text-danger">
                            <strong>No provider Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $providers->links() }}

    </div>
</div>
@endsection