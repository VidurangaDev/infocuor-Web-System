<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DASHBOARD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-4">
                    <div class="row">
                        <!-- Users Count Card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title">Users Count</h5>
                                    <h2 class="card-text">45</h2>
                                    {{-- <h2 class="card-text">{{ $userCount }}</h2> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Feedback Count Card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title">Feedback Count</h5>
                                    <h2 class="card-text">11</h2>
                                    {{-- <h2 class="card-text">{{ $feedbackCount }}</h2> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Bookings Count Card -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title">Bookings Count</h5>
                                    <h2 class="card-text">6</h2>
                                    {{-- <h2 class="card-text">{{ $bookingsCount }}</h2> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Bar Section -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm border-0 mt-4">
                                <div class="card-body">
                                    <h5 class="card-title">User Account Creation Progress</h5>
                                    <div class="progress" style="height: 30px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"
                                             {{-- style="width: {{ $userCreationProgress }}%" --}}
                                             {{-- aria-valuenow="{{ $userCreationProgress }}" aria-valuemin="0" aria-valuemax="100"> --}}

                                            style="width: 60%""
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                             50%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
