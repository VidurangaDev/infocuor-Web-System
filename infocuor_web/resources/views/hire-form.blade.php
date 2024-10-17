<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Us Form</title>
    <link rel="stylesheet" href="{{ asset('css/hire-form.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Hire Our Photography Services</h1>
        <form action="{{ route('hire.submit') }}" method="POST">
            @csrf
            <!-- A. Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>

                <label for="organization">Organization (if applicable):</label>
                <input type="text" id="organization" name="organization">
            </fieldset>

            <!-- B. Event/Project Details -->
            <fieldset>
                <legend>Event/Project Details</legend>
                <label for="project_name">Event/Project Name:</label>
                <input type="text" id="project_name" name="project_name" required>

                <label for="event_date">Event/Project Date:</label>
                <input type="date" id="event_date" name="event_date" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>

                <label for="event_type">Type of Event/Project:</label>
                <select id="event_type" name="event_type" required>
                    <option value="Wedding">Wedding</option>
                    <option value="Corporate Event">Corporate Event</option>
                    <option value="Portrait Photography">Portrait Photography</option>
                    <option value="Product Photography">Product Photography</option>
                    <option value="Other">Other</option>
                </select>

                <label for="guests">Number of Expected Guests (if applicable):</label>
                <input type="number" id="guests" name="guests">

                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration">

                <label for="description">Description of Services Required:</label>
                <textarea id="description" name="description"></textarea>

                <label for="budget">Budget Range:</label>
                <input type="text" id="budget" name="budget">
            </fieldset>

            <!-- C. Additional Services -->
            <fieldset>
                <legend>Additional Services</legend>
                <label for="editing">Do you require editing/post-processing?</label>
                <input type="checkbox" id="editing" name="editing" value="Yes">

                <label for="printing">Do you require printing services?</label>
                <input type="checkbox" id="printing" name="printing" value="Yes">

                <label for="album">Do you require a photo album?</label>
                <input type="checkbox" id="album" name="album" value="Yes">
            </fieldset>

            <!-- D. Agreement and Submission -->
            <fieldset>
                <legend>Agreement and Submission</legend>
                <label for="terms">
                    <input type="checkbox" id="terms" name="terms" required> I agree to the Terms and Conditions
                </label>

                <p>Preferred Method of Contact:</p>
                <label for="contact_email">Email</label>
                <input type="radio" id="contact_email" name="contact_method" value="Email" required>
                <label for="contact_phone">Phone</label>
                <input type="radio" id="contact_phone" name="contact_method" value="Phone" required>
            </fieldset>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
