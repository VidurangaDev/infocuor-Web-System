








<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Executive Dashboard') }}
        </h2>
    </x-slot>
    {{-- @media (max-width: 600px) {
        #calendar {
            font-size: 12px; /* Adjust font size for mobile */
        }
    }     --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div id="calendar" class="container my-4" style="max-width: 100%; margin: 0 auto;">
                    @if(auth()->user()->type === 'executive')
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-sm-12">
                                <form action="{{ route('event.assign', $eventBooking->id) }}" method="POST" class="p-3 shadow-sm bg-white rounded">
                                    @csrf  <!-- CSRF token to protect from cross-site attacks -->
                
                                    <div class="form-group mb-3">
                                        <label for="member_id" class="form-label">Assign Member:</label>
                                        <select name="member_id" id="member_id" class="form-select" required>
                                            @foreach($members as $member)
                                                <option value="{{ $member->id }}">{{ $member->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary btn-block">Assign Member</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
                
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
                
                    
            </div>
        </div>
    </div>
</x-app-layout>
