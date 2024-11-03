<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Executive Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container my-4">
                <div class="bg-white overflow-hidden shadow-lg rounded p-4">
                    <h1 class="h4 mb-4">Edit Budget</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('budgets.update', $budget->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="event_name" class="form-label">Event Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control"
                                   value="{{ old('event_name', $budget->event_name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="income" class="form-label">Income</label>
                            <input type="number" step="0.01" name="income" id="income" class="form-control"
                                   value="{{ old('income', $budget->income) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="outcome" class="form-label">Outcome</label>
                            <input type="number" step="0.01" name="outcome" id="outcome" class="form-control"
                                   value="{{ old('outcome', $budget->outcome) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deposited_amount" class="form-label">Deposited Amount</label>
                            <input type="number" step="0.01" name="deposited_amount" id="deposited_amount" class="form-control"
                                   value="{{ old('deposited_amount', $budget->deposited_amount) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="event_date" class="form-label">Event Date</label>
                            <input type="date" name="event_date" id="event_date" class="form-control"
                                   value="{{ old('event_date', $budget->event_date) }}" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('budgets.index') }}" class="btn btn-secondary">Back to Budget List</a>
                            <button type="submit" class="btn btn-primary">Update Budget</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
