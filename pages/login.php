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
                <label for="user-name">Email</label>
                <input type="text" id="user-name" name="name" class="box" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="box" required>
            </div>

            <div class="form-group">
                <label for="user-role">Who are you?</label>
                <select id="user-role" name="user-role" class="box" required>
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                    <option value="cashier">Cashier</option>
                    <option value="staff">Staff</option>
                </select>
            </div>

            <button type="submit" class="box">Sign in</button>
        </form>
        <p>Don't have an account? <a href="register.html">Register</a></p>
    </div>
</body>
</html>
