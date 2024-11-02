<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Accepted</title>
    <style>
        /* Add any custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #007bff;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            color: #ffffff;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            line-height: 1.6;
            color: #333333;
        }
        .email-footer {
            text-align: center;
            font-size: 12px;
            color: #666666;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #218838;
        }
        .text-muted {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="email-header">
            <h1>Booking Accepted</h1>
        </div>

        <!-- Email Body -->
        <div class="email-body">
            <p>Dear {{ $booking->name }},</p>

            <p>We are pleased to inform you that your booking for the event <strong>{{ $booking->event_name }}</strong> on <strong>{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}</strong> has been <strong>accepted</strong>.</p>

            <p>Here are the details of your booking:</p>
            <ul>
                <li><strong>Event Name:</strong> {{ $booking->event_name }}</li>
                <li><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}</li>
                <li><strong>Time:</strong> {{ $booking->time }}</li>
                <li><strong>Location:</strong> {{ $booking->event_location }}</li>
                <li><strong>Photography Services:</strong> {{ $booking->photography ? 'Yes' : 'No' }}</li>
                <li><strong>Videography Services:</strong> {{ $booking->videography ? 'Yes' : 'No' }}</li>
                <li><strong>Live Streaming:</strong> {{ $booking->live_streaming ? 'Yes' : 'No' }}</li>
                <li><strong>Media Reporting:</strong> {{ $booking->media_reporting ? 'Yes' : 'No' }}</li>
            </ul>

            <p>If you have any questions or need further assistance, feel free to contact us. We look forward to capturing the best moments of your event!</p>

            <a href="{{ url('/') }}" class="btn-center">Visit Our Website</a>
        </div>

        <!-- Footer Section -->
        <div class="email-footer">
            <p class="text-muted">Thank you for choosing us!</p>
            <p class="text-muted">&copy; {{ date('Y') }} Infocuor Photography Association, Faculty of Science, University of Ruhuna</p>
        </div>
    </div>
</body>
</html>
