<!-- resources/views/emails/event_completed.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Completed</title>
</head>
<body>
    <p>Dear {{ $booking->customer_name }},</p>
    <p>Your event {{ $booking->event_name }} has been successfully completed. Thank you for choosing us!</p>
    <p>If you have any questions, feel free to contact us.</p>
    <p>Best regards,<br>The Infocuor Team</p>
</body>
</html>
