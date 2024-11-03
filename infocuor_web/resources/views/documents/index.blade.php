<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DOCUMENTS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container my-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="h3">Documents</h1>
                        <a href="{{ route('documents.create') }}" class="btn btn-primary">Upload Document</a>
                    </div>

                    @if ($documents->isEmpty())
                        <div class="alert alert-info" role="alert">
                            No documents uploaded yet.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>File Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                        <tr>
                                            <td>{{ $document->title }}</td>
                                            <td>{{ $document->file_type }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('documents.show', $document->id) }}" class="btn btn-info btn-sm">
                                                        <i class="fas fa-download"></i> Download
                                                    </a>
                                                    <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
