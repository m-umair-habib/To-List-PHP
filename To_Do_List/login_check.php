<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $mail = $_POST['email'];
    $psw = $_POST['psw'];

    include('connect.php');
    $query = "select * from table_credentials where Email='$mail'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $query));
    if ($psw==$data['password']) {
        $_SESSION['user_mail'] = $data['Email'];
        $_SESSION['user_name'] = $data['Name'];
        header("Location:view_data.php");
    }
    else{
        echo "not matched";
    }
}




?>