<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Trial Class Query</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-wrapper {
            max-width: 620px;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .email-header {
            background-color: #1b3b57;
            padding: 25px;
            color: #ffffff;
            text-align: center;
        }
        .email-body {
            padding: 25px 30px;
        }
        .email-body h3 {
            margin-top: 0;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .data-table td {
            padding: 8px 12px;
            border-bottom: 1px solid #eee;
        }
        .data-table td.label {
            font-weight: bold;
            width: 40%;
            color: #555;
        }
        .email-footer {
            background-color: #f5f5f5;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h2>New Trial Class Request</h2>
        </div>

        <div class="email-body">
            <p>You have received a new trial class query. Below are the details:</p>

            <table class="data-table">
                @if (!empty($name))
                    <tr>
                        <td class="label">Name</td>
                        <td>{{ $name }}</td>
                    </tr>
                @endif
                @if (!empty($email))
                    <tr>
                        <td class="label">Email</td>
                        <td>{{ $email }}</td>
                    </tr>
                @endif
                @if (!empty($phone))
                    <tr>
                        <td class="label">Phone</td>
                        <td>{{ $phone }}</td>
                    </tr>
                @endif
                @if (!empty($country))
                    <tr>
                        <td class="label">Country</td>
                        <td>{{ $country }}</td>
                    </tr>
                @endif
                @if (!empty($course_enroll))
                    <tr>
                        <td class="label">Course Interested</td>
                        <td>{{ $course_enroll }}</td>
                    </tr>
                @endif
                @if (!empty($message))
                    <tr>
                        <td class="label">Message</td>
                        <td>{{ $message }}</td>
                    </tr>
                @endif
            </table>

            <p style="margin-top: 20px;">Please follow up with the student as soon as possible, InshAllah.</p>
        </div>

        <div class="email-footer">
            © {{ now()->year }} Roohul Quran — Trial Query Notification
        </div>
    </div>
</body>
</html>
