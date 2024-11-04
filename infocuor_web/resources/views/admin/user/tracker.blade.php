<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @php
                $statuses = ['Covering', 'Selecting', 'Editing', 'Finishing', 'Completed'];
                $statusIndex = array_search($booking->tracking_status, $statuses);
                $progressPercentage = (($statusIndex + 1) / count($statuses)) * 100;
            @endphp

            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{ $progressPercentage }}%"
                    aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                    {{ $booking->tracking_status }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
