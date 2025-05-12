<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Trial-Class Request</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">
    <div style="max-width: 600px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h3 style="color: #9a8f50;">📬 New Trial-Class Submission Received</h3>

        <ul>
            <li><strong>Name:</strong> {{ $data['name'] }}</li>
            <li><strong>Email:</strong> {{ $data['email'] ?? '—' }}</li>
            <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
            <li><strong>Country:</strong> {{ $data['country'] ?? '—' }}</li>
            <li><strong>Course:</strong> {{ $data['course_enroll'] ?? '—' }}</li>
            <li><strong>Message:</strong> {{ $data['message'] ?? '—' }}</li>
        </ul>

        <p>Please follow up with the user as soon as possible.</p>

        <p style="margin-top: 30px;">— System Notification from <strong>Roohul Quran</strong></p>
    </div>
</body>
</html>
