<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginDB');
if(!$connection){
    die("Koneksi database gagal!".mysqli_connect_error());
}
?>