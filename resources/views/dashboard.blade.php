<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <!-- Portfolio Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-header d-flex align-items-center">
                        <i class="fa fa-briefcase fa-2x me-2"></i>
                        <h5 class="mb-0">Portfolio</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-3">
                            Explore the portfolio showcasing our latest projects and achievements. Learn about our expertise and past successes.
                        </p>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-primary">View Portfolio</a>
                    </div>
                </div>
            </div>

            <!-- Laravel 11 Spatie Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-header d-flex align-items-center">
                        <i class="fa fa-cogs fa-2x me-2"></i>
                        <h5 class="mb-0">Laravel 11 Spatie</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-3">
                            Discover how to integrate Spatie packages with Laravel 11 to enhance your application's functionality and security.
                        </p>
                        <a href="{{ route('users.index') }}" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Laravel 11 CRUD Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-header d-flex align-items-center">
                        <i class="fa fa-database fa-2x me-2"></i>
                        <h5 class="mb-0">Laravel 11 CRUD</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-3">
                            Understand the CRUD operations in Laravel 11 and how to implement them effectively in your application.
                        </p>
                        <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Laravel 11 Testing Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded">
                    <div class="card-header d-flex align-items-center">
                        <i class="fa fa-check-circle fa-2x me-2"></i>
                        <h5 class="mb-0">Laravel 11 Testing</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-3">
                            Explore how to write and run tests in Laravel 11 to ensure your application runs smoothly and efficiently.
                        </p>
                        <a href="{{ route('tests.index') }}" class="btn btn-outline-success">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>