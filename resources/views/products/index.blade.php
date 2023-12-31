@extends('adminlte::page')

@section('title', 'Produtcs')

@section('content_header')
    <h2 class="h2 text-center display-5 text-primary fw-light">PRODUCT LIST</h2>
@stop


@section('content')
    <div class="card">
        <div class="card-body">
            @can('create-product')
                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2">
                    <i class="fas fa-plus-circle"></i> Add New Product
                </a>

                <a href="{{ route('download-pdf.products') }}" class="btn btn-info btn-sm my-2"><i
                    class="fas fa-print"></i> Download PDF</a>
            @endcan

            <div class="mb-3">
                <form action="{{ route('products.index') }}" method="get" id="searchForm">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" id="searchInput"
                            placeholder="Search by product name" value="{{ $query }}" autocomplete="off"
                            oninput="searchProducts()">
                    </div>
                </form>
            </div>

            <div id="searchResults">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Category</th>
                            <th scope="col">Provider</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->category->name ?? 'None' }}</td>
                                <td>{{ $product->provider->name ?? 'None' }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post" class="form-delete">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('products.show', $product->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="far fa-eye"></i> Show
                                        </a>

                                        @can('edit-product')
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                        @endcan

                                        @can('delete-product')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="8">
                                <span class="text-danger">
                                    <strong>No Product Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                    
                </table>
                {{ $products->links() }}
            </div>
            
        </div>
    </div>
@stop


@section('js')
    <script>
        function searchProducts() {
            clearTimeout(window.searchTimer);

            window.searchTimer = setTimeout(function() {
                $.ajax({
                    url: "{{ route('products.index') }}",
                    type: 'GET',
                    data: $('#searchForm').serialize(),
                    success: function(data) {
                        $('#searchResults').html(data);
                    }
                });
            }, 500);
        }
    </script>

    @if (session('delete') == 'ok')
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "Product deleted.",
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
@endsection
