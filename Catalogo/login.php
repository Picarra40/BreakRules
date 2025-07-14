<?php
session_start();
$users = json_decode(file_get_contents("users.txt"), true);
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['user'] = $username;
    echo "success";
} else {
    echo "Invalid username or password.";
}
?>