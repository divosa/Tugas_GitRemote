<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui/dist/full.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #374151;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .login-container label {
            font-size: 0.875rem;
            font-weight: 500;
            color: #4b5563;
        }
        .login-container input {
            border-radius: 5px;
            border: 1px solid #d1d5db;
            padding: 0.5rem;
            width: 100%;
            font-size: 1rem;
            color: #374151;
            margin-top: 0.5rem;
        }
        .login-container input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }
        .login-container button {
            background-color: #3b82f6;
            color: #ffffff;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            margin-top: 1rem;
        }
        .login-container button:hover {
            background-color: #2563eb;
        }
        .login-container p {
            font-size: 0.875rem;
            color: #6b7280;
            text-align: center;
            margin-top: 1rem;
        }
        .login-container p a {
            color: #3b82f6;
            font-weight: 500;
            text-decoration: none;
        }
        .login-container p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login ke Online Shop</h2>
        <form action="process_login.php" method="POST">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div style="margin-top: 1rem;">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar</a></p>
    </div>
</body>
</html>
