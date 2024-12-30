<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $task = $_POST['task'];
    $id = rand();
    $table = $_POST['table'];
    $q = "insert into $table (task_id, task_value) values ('$id', '$task');";
    include('connect.php');
    if (mysqli_query($conn, $q)) {
        header("Location: view_data.php");
    }
}
?>