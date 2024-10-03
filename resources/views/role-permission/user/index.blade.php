<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <!-- Navigation Buttons -->
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ url('roles') }}" class="btn btn-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Roles">Roles</a>
            <a href="{{ url('permissions') }}" class="btn btn-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Permissions">Permissions</a>
            <a href="{{ url('users') }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="View Users">Users</a>
        </div>

        <!-- User Management Card -->
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Users</h4>
                @can('create user')
                <a href="{{ url('users/create') }}" class="btn btn-primary">Add User</a>
                @endcan
            </div>
            <div class="card-body">

                <!-- Success Message Alert -->
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Users Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $rolename)
                                            <span class="badge bg-primary me-1">{{ $rolename }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @can('update user')
                                    <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-success btn-sm me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit User">Edit</a>
                                    @endcan

                                    @can('delete user')
                                    <a href="{{ url('users/'.$user->id.'/delete') }}" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete User">Delete</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Initialize Tooltips -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        })
    </script>
    @endpush

</x-app-layout>
