<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Registration and Login</title>
</head>
<body>
<div class="container">
<div class="form-container1">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
    </div>


    <div class="form-container">
        <form action="register.php" method="post">
            <h2>Register</h2>
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" required><br><br>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" required><br><br>
            <button type="submit">Register</button>
        </form>
    </div>

  
</div>

</body>
</html>
