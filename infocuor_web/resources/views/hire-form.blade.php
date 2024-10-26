<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Fill Your Information</h1>
        <form id="eventForm">
            <div class="section">
                <h2>Personal Information</h2>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="section">
                <h2>Contact Details</h2>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="email">E-mail Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="section">
                <h2>Event Details</h2>
                <label for="eventName">Event Name</label>
                <input type="text" id="eventName" name="eventName" required>

                <label>Event Type</label>
                <select name="time" required>
                    <option>Day</option>
                    <option>Night</option>
                </select>
                <select name="indoorOutdoor" required>
                    <option>Indoor</option>
                    <option>Outdoor</option>
                </select>

                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>

                <label for="faculty">Faculty/Department</label>
                <select id="faculty" name="faculty" required>
                    <option>Faculty Of Science</option>
                    <option>Faculty Of Arts</option>
                    <!-- Add more options as needed -->
                </select>

                <label for="duration">Expected Duration</label>
                <input type="number" id="duration" name="duration" required>

                <label for="audience">Expected Audience</label>
                <input type="number" id="audience" name="audience" required>

                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Time</label>
                <input type="time" id="time" name="time" required>
            </div>

            <div class="section">
                <h2>Requirements</h2>
                <label><input type="checkbox" name="requirement" value="Photography"> Photography Coverage</label>
                <label><input type="checkbox" name="requirement" value="Media"> Media Reporting</label>
                <label><input type="checkbox" name="requirement" value="Videography" checked> Videography Coverage</label>
                <label><input type="checkbox" name="requirement" value="Content" checked> Content Writing</label>
                <label><input type="checkbox" name="requirement" value="Live"> Live Streaming</label>
                <label><input type="checkbox" name="requirement" value="Social"> Social Media Marketing</label>
            </div>

            <div class="section">
                <h2>Type of photography needed:</h2>
                <label><input type="checkbox" name="photoType" value="Event" checked> Event Coverage</label>
                <label><input type="checkbox" name="photoType" value="Portraits"> Portraits</label>
                <label><input type="checkbox" name="photoType" value="Photo Booth"> Photo Booth</label>
                <label><input type="checkbox" name="photoType" value="Drone"> Drone Scenes</label>
            </div>

            <div class="section">
                <h2>Type of Videography needed:</h2>
                <label><input type="checkbox" name="videoType" value="Full" checked> Full Event Coverage</label>
                <label><input type="checkbox" name="videoType" value="Highlights"> Highlights Video</label>
                <label><input type="checkbox" name="videoType" value="Drone"> Drone Scenes</label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
