<?php
    $host = "localhost";
    $uname = "root";
    $pass = "";
    $db_name = "my_db";

    $conn = mysqli_connect($host, $uname, $pass, $db_name);

    $qury = "SELECT * FROM student";
    $resul = mysqli_query($conn, $qury);