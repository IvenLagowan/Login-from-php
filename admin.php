<?php
session_start();
$username = $_SESSION['username'];
$level = $_SESSION['level'];
if(!empty($username) && ($level == '1')){
    echo "<h1>Admin | Dashboard</h1>";
    echo "Welcome! ".$username;
}else{
    header('location:index.html');
}

echo "<a href='logout.php'>Log Out</a>";
?>