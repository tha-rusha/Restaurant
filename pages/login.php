<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Login</title>
    <link rel="stylesheet" type="text/css" href="../css/loginstyles.css">
</head>
<body>
    <div class="container">
        <form id="registration-form">
            <h2>Login</h2>
            <h3>Sign in to your account and make sure all details are accurate.</h3>
            <div class="form-group">
                <label for="user-name">UserName(Email)</label>
                <input type="text" id="user-name" name="name" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Sign in</button>
        </form>
        <p>Don't have an account? <a href="register.html">Register</a></p>
    </div>
</body>
</html>
