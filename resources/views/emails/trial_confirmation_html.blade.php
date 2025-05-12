<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trial Class Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .email-header {
            background-color: #005782;
            padding: 20px;
            color: #ffffff;
            text-align: center;
        }
        .email-body {
            padding: 30px;
        }
        .email-body p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .email-footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h2>Roohul Quran</h2>
        </div>

        <div class="email-body">
            <p>Assalamu Alaikum {{ $name ?? 'Student' }},</p>

            <p>
                Thank you for requesting a trial class at <strong>Roohul Quran</strong>. We appreciate your interest in learning the Holy Quran.
            </p>

            <p><strong>Your Submitted Details:</strong></p>
            <ul>
                @if (!empty($email)) <li><strong>Email:</strong> {{ $email }}</li> @endif
                @if (!empty($phone)) <li><strong>Phone:</strong> {{ $phone }}</li> @endif
                @if (!empty($country)) <li><strong>Country:</strong> {{ $country }}</li> @endif
                @if (!empty($course_enroll)) <li><strong>Course Enrolled:</strong> {{ $course_enroll }}</li> @endif
                @if (!empty($message)) <li><strong>Message:</strong> {{ $message }}</li> @endif
            </ul>

            <p>We will contact you soon, InshAllah.</p>

            <p>JazakAllah Khair,<br>Team Roohul Quran</p>
        </div>

        <div class="email-footer">
            © {{ now()->year }} Roohul Quran. All rights reserved.
        </div>
    </div>
</body>
</html>
