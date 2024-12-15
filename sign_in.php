<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sign In</h2>
        <form id="sign-in-form" action="sign_in.php" method="POST">
            <label for="sign-in-email">Email</label>
            <input type="email" name="email" id="sign-in-email" placeholder="Enter your email" required>
        
            <label for="sign-in-password">Password</label>
            <input type="password" name="password" id="sign-in-password" placeholder="Enter your password" required>
        
            <button type="submit">Sign In</button>
        </form>        
        <a class="toggle-link" href="sign_up.html">Don't have an account? Sign Up</a>
    </div>
</body>
</html>
