<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:;
            color: #333;
            line-height: 1.5;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-width: 200px;
            margin-bottom: 30px;
        }
        .reset-link {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .reset-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://example.com/logo.png" alt="Logo" class="logo">
        <h1>Reset Your Password</h1>
        <p>Hi there,</p>
        <p>We received a request to reset your password. If you didn't make this request, you can safely ignore this email.</p>
        <p>To reset your password, please click the button below:</p>
        <a href="{{ $resetUrl }}" class="reset-link">Reset Password</a>
        <p>If the button doesn't work, you can copy and paste the following link into your browser:</p>
        <p>{{ $resetUrl }}</p>
        <p>This reset link will expire in 60 minutes, so please use it promptly.</p>
        <p>Thanks,<br>The Example Team</p>
    </div>
</body>
</html>
