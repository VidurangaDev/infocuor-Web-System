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
                    <h1 class="h4 mb-4">Budget Details</h1>

                    <div class="mb-3">
                        <strong>Event Name:</strong> <span class="text-muted">{{ $budget->event_name }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Income:</strong> <span class="text-muted">{{ $budget->income }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Outcome:</strong> <span class="text-muted">{{ $budget->outcome }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Deposited Amount:</strong> <span class="text-muted">{{ $budget->deposited_amount }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Event Date:</strong> <span class="text-muted">{{ $budget->event_date }}</span>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('budgets.index') }}" class="btn btn-secondary">Back to Budget List</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
