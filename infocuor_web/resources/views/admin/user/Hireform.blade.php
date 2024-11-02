<style>
    .input-field {
        @apply w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent;
    }

    .btn-primary {
        @apply bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 focus:ring-2 focus:ring-indigo-500 focus:outline-none;
    }

    .btn-secondary {
        @apply bg-gray-300 text-black px-4 py-2 rounded-lg hover:bg-gray-400 focus:ring-2 focus:ring-gray-500 focus:outline-none;
    }

    .form-group {
        @apply mb-4;
    }

    .checkbox-item {
        @apply flex items-center;
    }

    .checkbox-group {
        @apply grid grid-cols-2 gap-4;
    }

    /* Ensuring the background stays fixed */
    body {
        background-image: url('images/membershipHome');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BOOKING DETAILS') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <script src="https://cdn.tailwindcss.com"></script>

            <body class="bg-cover bg-center h-screen" style="background-image:{{ asset('images/mainHome5.jpeg') }};">
                <div class="flex items-center justify-center min-h-screen bg-red-900 bg-opacity-10">
                    <div class="bg-black bg-opacity-80 p-10 rounded-lg shadow-lg max-w-xl w-full">
                        <h1 class="text-3xl font-bold text-yellow-400 mb-6 text-center">BOOK AN EVENT</h1>
                        <form action="{{ route('event.booking.submit') }}" method="POST">
                            @csrf

                            <!-- Personal Information Section -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div>
                                    <label for="name" class="block text-gray-200">Name</label>
                                    <input type="text" name="name" id="name"
                                    value="{{ old('name', auth()->user()->name) }}"
                                        class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none" required>
                                    {{-- placeholder="Enter your name" > --}}
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-200">Email</label>
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', auth()->user()->email) }}"
                                        class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none" required>
                                    {{-- placeholder="Enter your email" required> --}}
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="mb-6">
                                <label for="phone" class="block text-gray-200">Phone</label>
                                <input type="tel" name="phone" id="phone"
                                    class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none"
                                    placeholder="Enter your phone number" required>
                            </div>

                            <!-- Event Details -->
                            <div class="mb-6">
                                <label for="event_name" class="block text-gray-200">Event Name</label>
                                <input type="text" name="event_name" id="event_name"
                                    class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none"
                                    placeholder="Enter event name" required>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <!-- Date Input -->
                                <div>
                                    <label for="date" class="block text-gray-200">Date</label>
                                    <input type="date" name="date" id="date"
                                        class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none" required>
                                </div>

                                <!-- Time Input -->
                                <div>
                                    <label for="time" class="block text-gray-200">Time</label>
                                    <input type="time" name="time" id="time"
                                        class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none" required>
                                </div>
                            </div>


                            <div class="mb-6">
                                <label for="event_location" class="block text-gray-200">Event Location</label>
                                <input type="text" name="event_location" id="event_location"
                                    class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none"
                                    placeholder="Enter event location" required>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div>
                                    <label for="faculty" class="block text-gray-200">Faculty</label>
                                    <select name="faculty" id="faculty" required
                                        class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none">
                                        <option value="" disabled selected>Select your faculty</option>
                                        <option value="science">Faculty of Science</option>
                                        <option value="management">Faculty of Management and Finance</option>
                                        <option value="engineering">Faculty of Engineering</option>
                                        <option value="agriculture">Faculty of Agriculture</option>
                                        <option value="medicine">Faculty of Medicine</option>
                                        <option value="allied_health">Faculty of Allied Health Sciences</option>
                                        <option value="humanities_social_sciences">Faculty of Humanities and Social
                                            Sciences</option>
                                        <option value="fisheries_marine">Faculty of Fisheries and Marine Sciences &
                                            Technology</option>
                                        <option value="technology">Faculty of Technology</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="department" class="block text-gray-200">Location Type</label>
                                    <input type="text" name="department" id="department"
                                        class="w-full p-3 bg-gray-800 text-white rounded focus:outline-none"
                                        placeholder="Enter your Department">
                                </div>
                            </div>

                            <!-- Requirements Section -->
                            <h4 class="text-xl font-semibold text-yellow-400 mb-4">Requirements</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center">
                                    <input type="checkbox" name="photography" id="photography" value="1"
                                        class="h-5 w-5 bg-gray-800">
                                    <label for="photography" class="ml-2 text-gray-200">Photography Coverage</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="videography" id="videography" value="1"
                                        class="h-5 w-5 bg-gray-800">
                                    <label for="videography" class="ml-2 text-gray-200">Videography Coverage</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="live_streaming" id="live_streaming" value="1"
                                        class="h-5 w-5 bg-gray-800">
                                    <label for="live_streaming" class="ml-2 text-gray-200">Live Streaming</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="media_reporting" id="media_reporting" value="1"
                                        class="h-5 w-5 bg-gray-800">
                                    <label for="media_reporting" class="ml-2 text-gray-200">Media Reporting</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-8">
                                <button type="submit"
                                    class="w-full py-3 bg-yellow-400 text-black font-bold rounded hover:bg-yellow-500 focus:outline-none">Book
                                    Now</button>
                            </div>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if (session('success'))
                            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </body>

        </div>
    </div>
</x-app-layout>
