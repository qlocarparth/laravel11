<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
            @session('success')
                <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>products
                            @can('create products')
                            <a class="btn btn-primary float-end" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
                            @endcan
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped mt-4">
                            <thead>
                                <tr>
                                    <th width="80px">No</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th width="250px">Action</th>
                                </tr>
                            </thead>
                
                            <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            
                                            <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>
                            
                                            <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            
                                            @csrf
                                            @method('DELETE')
                                
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">There are no data.</td>
                                </tr>
                            @endforelse
                            </tbody>
                
                        </table>
                            
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>