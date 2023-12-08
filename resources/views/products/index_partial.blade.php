    
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
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
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
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Do you want to delete this product?');">
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

