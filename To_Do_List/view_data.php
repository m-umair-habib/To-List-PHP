<?php
session_start(); // Start the session to check for logged-in user
//echo $_SESSION['user_name'];
$table = str_replace(" ","",$_SESSION['user_name']);
$q = "select * from $table";
include('connect.php');
$data = mysqli_query($conn, $q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="to-do-list.png">
    <link rel="stylesheet" href="view_data.css">
    <title>To-Do List</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['user_name']; ?></h1>
    <hr>
    <form method="POST" action="add_task.php">
           <input type="text" name="task" id="taskInput" placeholder="Add new task" required>
           <input type="hidden" value="<?php echo $table;?>" name='table'>
           <input type="submit" value='Submit'>
       </form>

    <table border="1">
            <tr>
                <th>Task</th>
                <th>Action</th>
            </tr>
        <?php
        while($d = mysqli_fetch_assoc($data)){
            ?>
            <tr>
                <th><?php echo $d['task_value'];?></th>
                <th><a href="delete.php?id='<?php echo $d['task_id'];?>'&table='<?php echo $table;?>'">Mark Complete</a></th>
            </tr>
        <?php
    }      
        ?>
    </table>

</body>
</html>