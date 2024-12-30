<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $pass = $_POST['password']; 
  include('connect.php');
  $sql = "INSERT INTO table_credentials (Name, Email, password)
  VALUES ('$name', '$email', '$pass');";
  if (mysqli_query($conn, $sql)) {
    echo "inserted";
    $n = str_replace(" ","",$name);
    $q = "create table $n (task_id varchar(255) primary key, task_value varchar(255))";
    echo $q;
    if (mysqli_query($conn, $q)) {
      echo "table created";
      header("Location: login.php");
    }
  }
}
