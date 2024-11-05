<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BOOKING UPDATES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <h1 class="text-center text-white mb-4">Event Bookings</h1>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($bookings->isEmpty())
                    <div class="alert alert-info text-center">
                        <strong>No bookings available at the moment.</strong>
                    </div>
                @else
                    <div class="table-responsive">
                        <!-- Dark themed table -->
                        <table class="table table-dark table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Event Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->event_name }}</td>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ ucfirst($booking->status) }}</td>
                                        <td>
                                            @if ($booking->status == 'pending')
                                                <form action="{{ route('bookings.accept', $booking->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">Accept</button>
                                                </form>
                                                <form action="{{ route('bookings.reject', $booking->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                                </form>
                                            @else
                                                <span class="badge badge-secondary">{{ ucfirst($booking->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Event Progress Card -->
                                    <div class="card mt-4">
                                        <div class="card-header bg-primary text-white">
                                            Event Progress Tracking for {{ $booking->event_name }}
                                        </div>
                                        <div class="card-body">
                                            <div class="progress mb-3">
                                                <div class="progress-bar progress-bar-striped" role="progressbar"
                                                    style="width: {{ $booking->tracking_status == 'Completed' ? '100%' : ($booking->tracking_status == 'Finishing' ? '80%' : ($booking->tracking_status == 'Editing' ? '60%' : ($booking->tracking_status == 'Selecting' ? '40%' : '20%'))) }}"
                                                    aria-valuenow="{{ $booking->tracking_status == 'Completed' ? '100' : ($booking->tracking_status == 'Finishing' ? '80' : ($booking->tracking_status == 'Editing' ? '60' : ($booking->tracking_status == 'Selecting' ? '40' : '20'))) }}"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    {{ $booking->tracking_status }}
                                                </div>
                                            </div>

                                            <form action="{{ route('updateTrackingStatus', $booking->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="tracking_status">Update Status:</label>
                                                    <select class="form-control" name="tracking_status" id="tracking_status">
                                                        <option value="Covering" {{ $booking->tracking_status == 'Covering' ? 'selected' : '' }}>Covering</option>
                                                        <option value="Selecting" {{ $booking->tracking_status == 'Selecting' ? 'selected' : '' }}>Selecting</option>
                                                        <option value="Editing" {{ $booking->tracking_status == 'Editing' ? 'selected' : '' }}>Editing</option>
                                                        <option value="Finishing" {{ $booking->tracking_status == 'Finishing' ? 'selected' : '' }}>Finishing</option>
                                                        <option value="Completed" {{ $booking->tracking_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Update Status</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
