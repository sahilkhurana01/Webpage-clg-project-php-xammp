<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submitted - Flip the Page</title>
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
            max-width: 600px;
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

        .success-icon {
            width: 80px;
            height: 80px;
            background-color: #4CAF50;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }

        .success-icon::before {
            content: '✓';
            font-size: 48px;
            color: #ffffff;
        }

        h1 {
            font-family: 'Merriweather', serif;
            font-size: 24px;
            color: #4CAF50;
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
        <div class="success-icon"></div>
        <h1>Thank You for Your Feedback!</h1>
        <p>We appreciate your input. Your feedback has been successfully submitted and will help us improve our services.</p>
        <a href="../index.php" class="btn">Back to Home</a>
    </div>
</body>
</html>