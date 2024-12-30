<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="to-do-list.png" >
    <title>To-Do List</title>
</head>
<body>
    <div class="todo-list">
        <h1>To-Do List</h1>
        <form action="login_check.php" method="POST">
            <input type="email" placeholder="Enter email address..." name='email' required>
            <input type="password" placeholder="Enter password..." name='psw' required>
            <input type="submit" value="login">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>