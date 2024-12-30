<?php

include('connect.php');

if($_SERVER['REQUEST_METHOD']=='GET'){
    $id = $_GET['id'];
    $table = $_GET['table'];
    // $table = strtolower($table);
    $query = "delete from ".$table." where task_id='$id'";
    echo $query;

    if (mysqli_query($conn, $query)){
        header("Location: view_data.php");
    }
    else{
        header("Location: view_data.php");
    }
}
else{
    echo "ERROR";
}