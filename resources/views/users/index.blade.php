@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h2 class="h2 text-center display-5 text-primary fw-light">USER LIST</h2>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            @can('create-user')
                <a href="{{ route('users.create') }}" class="btn btn-success btn-sm my-2"><i class="fas fa-plus-circle"></i> Add
                    New User</a>
            @endcan
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @forelse ($user->getRoleNames() as $role)
                                    <span class="badge bg-primary">{{ $role }}</span>
                                @empty
                                @endforelse
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post" class="form-delete">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm"><i
                                            class="far fa-eye"></i> Show</a>

                                    @if (in_array('Super Admin', $user->getRoleNames()->toArray() ?? []))
                                        @if (Auth::user()->hasRole('Super Admin'))
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i
                                                    class="fas fa-pencil-alt"></i> Edit</a>
                                        @endif
                                    @else
                                        @can('edit-user')
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i
                                                    class="fas fa-pencil-alt"></i> Edit</a>
                                        @endcan

                                        @can('delete-user')
                                            @if (Auth::user()->id != $user->id)
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash"></i> Delete</button>
                                            @endif
                                        @endcan
                                    @endif

                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="5">
                            <span class="text-danger">
                                <strong>No User Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $users->links() }}

        </div>
    </div>

@stop

@section('js')

    @if (session('delete') == 'ok')
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "User deleted.",
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
