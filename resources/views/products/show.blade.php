<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm rounded-lg">
                    <div class="card-header bg-primary text-white font-weight-bold">
                        Show Product
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-3">
                            <a class="btn btn-secondary btn-sm" href="{{ route('products.index') }}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <strong class="d-block mb-1">Name:</strong>
                                    <p class="mb-0">{{ $product->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong class="d-block mb-1">Details:</strong>
                                    <p class="mb-0">{{ $product->detail }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
