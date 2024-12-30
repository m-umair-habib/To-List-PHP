<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="to-do-list.png" >
</head>
<body>
    <?php include ("connect.php");?>
    <div class="todo-list">
        <h1>Create Account</h1>
        <form action="insert_credentials.php" method="POST">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value='submit'>
        </form>
    </div>
</body>
</html>
