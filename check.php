<?php

$servername = "localhost";
$name = "root";
$pass = "";
$database = "buset";
$conn = mysqli_connect($servername, $name, $pass, $database);

if ($conn === false) {

    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['username'];

    $pass = $_POST['password'];

    $sql = "select * from admin where username='" . $name . "' AND password='" . $pass . "'   ";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["username"] == "kuku") {

        header("location:/po/admin/html/index.php");
    } else {
        header("location: login.php");
    }
}
