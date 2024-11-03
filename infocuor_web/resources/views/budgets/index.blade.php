<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BUDGETS') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container my-4">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <!-- Export Form -->
                        <form action="{{ route('budgets.export.email') }}" method="GET" class="mb-4">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" name="end_date" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Export to Excel</button>
                        </form>
                    </div>
                        <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="h4">Budget List</h1>
                            <a href="{{ route('budgets.create') }}" class="btn btn-success">
                                <i class="fas fa-plus me-2"></i>Create New Budget
                            </a>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Income</th>
                                        <th scope="col">Outcome</th>
                                        <th scope="col">Deposited Amount</th>
                                        <th scope="col">Event Date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($budgets as $budget)
                                        <tr>
                                            <td>{{ $budget->event_name }}</td>
                                            <td>{{ $budget->income }}</td>
                                            <td>{{ $budget->outcome }}</td>
                                            <td>{{ $budget->deposited_amount }}</td>
                                            <td>{{ $budget->event_date }}</td>
                                            <td>
                                                <a href="{{ route('budgets.show', $budget->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye me-1"></i> View
                                                </a>
                                                <a href="{{ route('budgets.edit', $budget->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('budgets.destroy', $budget->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this budget?')">
                                                        <i class="fas fa-trash me-1"></i> Delete
                                                    </button>
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
