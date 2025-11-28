<?php

$hostname = "Localhost";
$username = "root";
$password = "";
$database_name = "menu_login";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db ->connect_error) {
    echo "Koneksi databasae rusak";
    die("error!");
}
?>