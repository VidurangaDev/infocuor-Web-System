<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Executive Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container my-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h3">Upload Document</h1>
                    </div>

                    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Document Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Document File (PDF, JPEG, PNG)</label>
                            <input type="file" class="form-control" id="file" name="file" accept=".pdf,.jpeg,.jpg,.png" required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success me-2">Upload</button>
                            <a href="{{ route('documents.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
