@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h2 class="h2 text-center display-5 text-primary fw-light">CATEGORY LIST</h2>
@stop

@section('content')

    <div class="card">
    
        <div class="card-body">
            @can('create-category')
                <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="fas fa-plus-circle"></i> Add New Category
                </a>
            @endcan

            

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                                    class="form-delete">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-warning btn-sm">
                                        <i class="far fa-eye"></i> Show
                                    </a>

                                    @can('edit-category')
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-pencil-alt"></i> Edit
                                        </a>
                                    @endcan

                                    @can('delete-category')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td colspan="4">
                            <span class="text-danger">
                                <strong>No category Found!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $categories->links() }}
        </div>
    </div>
@stop

@section('js')

    @if (session('delete') == 'ok')
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "Category deleted.",
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
