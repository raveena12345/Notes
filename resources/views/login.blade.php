<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('signup.form') }}">Don't have an account? Sign Up</a>
    </div>
</body>
</html>
