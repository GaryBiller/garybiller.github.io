<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'username' && $password === 'Q8£764NQVS2X})??w#{KkG[I') {
        header("location: success.html");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>
