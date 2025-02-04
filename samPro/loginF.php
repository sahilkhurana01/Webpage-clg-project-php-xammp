<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed - Flip the Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 90%;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            font-family: 'Merriweather', serif;
            font-size: 28px;
            font-weight: bold;
            color: #000;
            margin-bottom: 20px;
        }

        .error-icon {
            width: 80px;
            height: 80px;
            background-color: #e44d26;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }

        .error-icon::before {
            content: '!';
            font-size: 48px;
            color: #ffffff;
            font-weight: bold;
        }

        h1 {
            font-family: 'Merriweather', serif;
            font-size: 24px;
            color: #e44d26;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            background-color: #e44d26;
            color: #ffffff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #d04323;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            .logo {
                font-size: 24px;
            }

            h1 {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">Flip the Page</div>
        <div class="error-icon"></div>
        <h1>Login Failed</h1>
        <p>We're sorry, but we couldn't log you in. Please check your email and password and try again.</p>
        <a href="index.php" class="btn">Try Again</a>
        <a href="../index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>