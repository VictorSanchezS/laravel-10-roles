@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h2 class="h2 text-center display-5 text-primary fw-light">CATEGORY LIST</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @can('create-role')
                <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="fas fa-plus-circle"></i> Add New Role
                </a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Name</th>
                        <th scope="col" style="width: 250px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $role->name }}</td>
                            <td>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="form-delete">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-sm">
                                        <i class="far fa-eye"></i> Show
                                    </a>

                                    @if ($role->name != 'Super Admin')
                                        @can('edit-role')
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                        @endcan

                                        @can('delete-role')
                                            @if ($role->name != Auth::user()->hasRole($role->name))
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            @endif
                                        @endcan
                                    @endif

                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="3">
                            <span class="text-danger">
                                <strong>No Role Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $roles->links() }}

        </div>
    </div>
@stop

@section('js')

    @if (session('delete') == 'ok')
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "Role deleted.",
                icon: "success"
            });
        </script>
    @endif

    <script>
        $('.form-delete').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
@stop
