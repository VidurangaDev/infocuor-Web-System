<style>
    .container {
        max-width: 600px;
        margin: auto;
    }

    .btn {
        margin-top: 10px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FEEDBACK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="container">
                <h2>Feedback Form</h2>

                <form action="{{ route('feedback.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>


        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Add a simple alert on form submission
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                alert('Thank you for your feedback!');
            });
        });
    </script>
</x-app-layout>
