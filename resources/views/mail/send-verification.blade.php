<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .email-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .email-header {
      text-align: center;
      padding-bottom: 20px;
    }

    .email-header h1 {
      color: #4CAF50;
      margin: 0;
    }

    .email-body {
      color: #555;
      font-size: 16px;
      line-height: 1.6;
    }

    .email-body p {
      margin: 10px 0;
    }

    .email-footer {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid #ddd;
      margin-top: 20px;
      color: #777;
      font-size: 14px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      margin: 20px 0;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
  <title>Welcome to Laravel News App</title>
</head>
<body>

  <div class="email-container">
    <div class="email-header">
      <h1>Welcome to Laravel News App</h1>
    </div>
    <div class="email-body">
      <p>Hi {{$user}}</p>
      <p>Your Code is {{$user->code}},</p>
      <p>Thank you for registering with us! We're excited to have you as a member of our blogging community.</p>
      <p>We hope you enjoy exploring and contributing to our content. If you have any questions or need assistance, feel free to reach out to us at any time.</p>
      <p>To get started, click the button below to visit your profile and personalize your experience:</p>
      <p>We're looking forward to seeing you share your thoughts and ideas with our community!</p>
    </div>
    <div class="email-footer">
      <p>Best regards,</p>
      <p>The Blog Team</p>
    </div>
  </div>

</body>
</html>
