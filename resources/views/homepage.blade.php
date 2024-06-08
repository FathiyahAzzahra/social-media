<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #444;
        }

        h2 {
            text-align: center;
            color: #555;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"], input[type="password"] {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Chatter</h1>
        <h2>Welcome to Our Social Media</h2>
        <p>apakah kamu sudah memiliki akun? </p>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
</body>
</html>
