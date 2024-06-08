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
            text-align: center; /* Membuat teks menjadi tengah */
        }

        h1 {
            color: #444;
        }

        h2 {
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

        input[type="text"], input[type="email"], input[type="password"] {
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

        .form-container {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chatter</h1>
        <h2>Welcome to Our Social Media</h2>
        <p>Apakah kamu sudah memiliki akun?</p>
        <p>Jika sudah, <a href="#login" onclick="showForm('login')">login</a></p>
        <p>Jika belum, <a href="#register" onclick="showForm('register')">register</a></p>

        <div id="register" class="form-container">
            <h2>Register</h2>
            <form method="POST" action="/register">
                <!-- Assuming you have a mechanism to handle @csrf tokens in your backend -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <label>Username:</label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <label>Confirm Password:</label>
                    <input type="password" name="password_confirmation" required>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>

        <div id="login" class="form-container">
            <h2>Login</h2>
            <form method="POST" action="/login">
                <!-- Assuming you have a mechanism to handle @csrf tokens in your backend -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script>
        function showForm(formId) {
            document.querySelectorAll('.form-container').forEach(form => {
                form.style.display = 'none';
            });
            document.getElementById(formId).style.display = 'block';
        }
    </script>
</body>
</html>
