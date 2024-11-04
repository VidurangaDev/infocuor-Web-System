<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Executive Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h3 class="text-center">Assign Members to Events</h3>

                <!-- Member Assignment Form -->
                @if(isset($users))
                    <form action="{{ route('booking.assign-members') }}" method="POST" id="assignMembersForm">
                        @csrf
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-8 col-sm-12">
                                    <!-- Event Selection -->
                                    <div class="form-group mb-3">
                                        <label for="event_id" class="form-label">Selected Event:</label>
                                        <input type="text" id="event_id" name="event_id" class="form-control" readonly>
                                    </div>
                                    
                                    <!-- Member Selection -->
                                    <div class="form-group mb-3">
                                        <label for="members" class="form-label">Assign Members:</label>
                                        <select name="user_ids[]" id="members" class="form-control" multiple>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Assign Members</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @else
                    <div class="alert alert-warning text-center">
                        No users found to assign.
                    </div>
                @endif

                <!-- Calendar -->
                <div id="calendar" class="container my-4" style="max-width: 100%; margin: 0 auto;"></div>
                
                <style>
                    /* Adjust calendar size for smaller devices */
                    #calendar {
                        font-size: 14px;
                    }
                
                    @media (max-width: 576px) {
                        #calendar {
                            font-size: 12px;  /* Reduce font size for smaller screens */
                        }
                    }
                </style>

                <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var calendarEl = document.getElementById('calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: 'dayGridMonth',
                            events: '/fetch-bookings', // Fetch bookings from the server
                            eventClick: function(info) {
                                // On event click, populate the form with the selected event details
                                var eventId = info.event.id;
                                document.getElementById('event_id').value = eventId;

                                // Scroll to the form after clicking an event
                                document.getElementById('assignMembersForm').scrollIntoView({ behavior: 'smooth' });
                            }
                        });
                        calendar.render();
                    });

                    // Fetch bookings dynamically from the server
                    function fetchBookings(fetchInfo, successCallback, failureCallback) {
                        $.ajax({
                            url: '/fetch-bookings', 
                            type: 'GET',
                            success: function(data) {
                                successCallback(data); // Pass the events to the calendar
                            },
                            error: function() {
                                failureCallback();
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>

    <!-- Event Details Modal (if needed, optional) -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Event details will be injected here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
