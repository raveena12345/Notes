<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="{{ route('signup.store') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <a href="{{ route('login.form') }}">Already have an account? Login</a>
    </div>
</body>
</html>
