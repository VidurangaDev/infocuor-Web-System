<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Report Export</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            margin: 0 auto;
            padding: 20px;
            max-width: 600px;
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 10px;
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
            background-color: #ffffff;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            text-align: center;
            color: #6c757d;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Budget Report</h2>
        </div>

        <div class="content">
            <p>Dear {{ $recipientName }},</p>

            <p>We have generated the budget report for the event: <strong>{{ $event_name }}</strong>.</p>

            <p><strong>Total Income:</strong> {{ $income }}<br>
            <strong>Total Expenses:</strong> {{ $expenses }}<br>
            <strong>Total Funds Raised:</strong> {{ $funds_raised ?? 'N/A' }}</p>

            <p>You can download the full budget report from the link below:</p>

            <p><a href="{{ $downloadLink }}" class="btn">Download Budget Report</a></p>

            <p>Thank you for your attention.</p>

            <p>Best regards,<br>
            {{ config('app.name') }} Team</p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
