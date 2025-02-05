<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: brown; /* Changed background color to brown */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: green; /* Changed text color to green */
        }
        .container {
            max-width: 600px;
            background: black; /* Changed box background to black */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .highlight {
            color: green; /* Ensuring highlight text is green */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, {{name}}!</h1>
        <p>We have sent a verification email to your email. Kindly check your inbox.</p>
        <p class="highlight">You are an amazing person!</p>
    </div>
</body>
</html>

