<?php
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = mysqli_query($connection, "SELECT username, password, level FROM tbl_data WHERE username = '$username' AND password = '$password' ");
$count = mysqli_num_rows($sql);
$fetchData = mysqli_fetch_array($sql);
if($count > 0){
    $level = $fetchData['level'];
    if($level == '1'){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
        header('location:admin.php');
    }else if($level == '0'){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = $level;
        header('location:user.php');
    }
}else{
    echo "Username dan Password yang Anda masukan salah. <br>";
    echo "<a href='index.html'>Kembali</a>";
}
?>