<?php

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['sex']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    include 'conn.php';
    if (empty($id) || empty($username) || empty($sex) || empty($email)) {
        header("Location: index.php");
    } else {
        $sql = "INSERT INTO student(id, username, sex, email) VALUES('$id', '$username', '$sex', '$email')";
        mysqli_query($conn, $sql);
    }
} 



