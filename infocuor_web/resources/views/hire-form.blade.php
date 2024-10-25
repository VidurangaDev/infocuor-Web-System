<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Us Form</title>
    <link rel="stylesheet" href="{{ asset('css/hire-form.css') }}">
</head>
<body>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('event.form.submit') }}" method="POST">
    @csrf
    <h2>Fill Your Information</h2>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" required>
    </div>

    <div>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="event_name">Event Name</label>
        <input type="text" name="event_name" id="event_name" required>
    </div>

    <div>
        <label for="event_type_day_or_night">Event Type</label>
        <select name="event_type_day_or_night" required>
            <option value="day">Day</option>
            <option value="night">Night</option>
        </select>

        <select name="event_type_indoor_outdoor" required>
            <option value="indoor">Indoor</option>
            <option value="outdoor">Outdoor</option>
        </select>
    </div>

    <div>
        <label for="location">Location</label>
        <input type="text" name="location" id="location" required>
    </div>

    <div>
        <label for="faculty_department">Faculty/Department</label>
        <select name="faculty_department" required>
            <option value="Faculty Of Science">Faculty Of Science</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <div>
        <label for="expected_duration">Expected Duration (hours)</label>
        <input type="number" name="expected_duration" id="expected_duration" required>
    </div>

    <div>
        <label for="expected_audience">Expected Audience</label>
        <input type="number" name="expected_audience" id="expected_audience" required>
    </div>

    <div>
        <label for="date">Date</label>
        <input type="date" name="date" id="date" required>
    </div>

    <div>
        <label for="time">Time</label>
        <input type="time" name="time" id="time" required>
    </div>

    <div class="requirements-section">
        <label>Requirements</label>
        <div>
            <input type="checkbox" name="requirements[]" value="photography"> Photography Coverage
            <input type="checkbox" name="requirements[]" value="media_reporting"> Media Reporting
            <input type="checkbox" name="requirements[]" value="videography"> Videography Coverage
            <input type="checkbox" name="requirements[]" value="content_writing"> Content Writing
            <input type="checkbox" name="requirements[]" value="live_streaming"> Live Streaming
            <input type="checkbox" name="requirements[]" value="social_media_marketing"> Social Media Marketing
        </div>
    </div>

    <div class="photography-section">
        <label>Type of Photography Needed</label>
        <div class="checkbox-section">
            <div>
                <input type="checkbox" name="photography_type[]" value="event_coverage"> Event Coverage
            </div>
            <div>
                <input type="checkbox" name="photography_type[]" value="portraits"> Portraits
            </div>
            <div>
                <input type="checkbox" name="photography_type[]" value="photo_booth"> Photo Booth
            </div>
            <div>
                <input type="checkbox" name="photography_type[]" value="drone_scenes"> Drone Scenes
            </div>
        </div>
    </div>

    <div class="videography-section">
        <label>Type of Videography Needed</label>
        <div class="checkbox-section">
            <div>
                <input type="checkbox" name="videography_type[]" value="full_event_coverage"> Full Event Coverage
            </div>
            <div>
                <input type="checkbox" name="videography_type[]" value="highlights_video"> Highlights Video
            </div>
            <div>
                <input type="checkbox" name="videography_type[]" value="drone_scenes"> Drone Scenes
            </div>
        </div>
    </div>

    <input type="submit" value="Submit">
</form>

</body>
</html>
