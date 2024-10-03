<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laravel 11 Test') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
    
                @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                @if (session('output'))
                    <div class="alert alert-info">
                        {!! html_entity_decode(session('output')) !!}
                    </div>
                @endif
    
                <div class="card">
                    <div class="card-header">
                        <h4>Create Test
                            <a href="{{ route('tests.create') }}" class="btn btn-danger float-end">Create Test</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tests as $test)
                                        <tr>
                                            <td>{{ $test->name }}</td>
                                            <td>{{ $test->description }}</td>
                                            <td>{{ $test->status }}</td>
                                            <td>
                                            @can('update test')
                                            <a href="{{ route('tests.edit', $test) }}" class="btn btn-success btn-sm me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit User">Edit</a>
                                            @endcan

                                            @can('delete test')
                                            <a href="{{ route('tests.destroy', $test) }}" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete User">Delete</a>
                                            @endcan
                                            <form action="{{ route('tests.run', $test) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Run Test</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


