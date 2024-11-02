<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Rejected</title>
    <style>
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
            background-color: #dc3545;
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
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
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
            <h1>Booking Rejected</h1>
        </div>

        <!-- Email Body -->
        <div class="email-body">
            <p>Dear {{ $booking->name }},</p>

            <p>We regret to inform you that your booking for the event <strong>{{ $booking->event_name }}</strong> on <strong>{{ \Carbon\Carbon::parse($booking->date)->format('F j, Y') }}</strong> has been <strong>rejected</strong>.</p>

            <p>We understand this may be disappointing, and we sincerely apologize for any inconvenience this may cause. Unfortunately, we are unable to accommodate your request due to <strong>(specific reason if applicable)</strong>.</p>

            <p>If you have any questions or would like to discuss alternative arrangements, please do not hesitate to contact us. We are always here to help and hope to assist you with your future event needs.</p>

            <a href="{{ url('/') }}" class="btn">Visit Our Website</a>
        </div>

        <!-- Footer Section -->
        <div class="email-footer">
            <p class="text-muted">Thank you for your understanding!</p>
            <p class="text-muted">&copy; {{ date('Y') }} Infocuor Photography Association, Faculty of Science, University of Ruhuna</p>
        </div>
    </div>
</body>
</html>
