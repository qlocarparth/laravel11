<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Test') }}
        </h2>
    </x-slot>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Test
                            <a href="{{ route('tests.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tests.update', $test) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- This is important for updating -->
                            
                            <div class="mb-3">
                                <label for="name">Test Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $test->name) }}" required>
                                @error('name')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control">{{ old('description', $test->description) }}</textarea>
                                @error('description')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{ $test->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $test->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
