<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui/dist/full.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2 class="text-center font-bold text-lg">Login ke Online Shop</h2>
    <form action="process_login.php" method="POST">
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium">Username</label>
            <input type="text" name="username" id="username" required 
                   class="input input-bordered w-full mt-1">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Password</label>
            <input type="password" name="password" id="password" required 
                   class="input input-bordered w-full mt-1">
        </div>
        <button type="submit" class="btn btn-primary w-full">Login</button>
    </form>
    <p class="text-sm text-center mt-4">Belum punya akun? <a href="register.php" class="text-blue-500">Daftar</a></p>
</div>

</body>
</html>
