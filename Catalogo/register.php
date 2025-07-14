<?php
$users = json_decode(file_get_contents("users.txt"), true);
$username = $_POST['username'];
$password = $_POST['password'];

if (!isset($users[$username])) {
    $users[$username] = $password;
    file_put_contents("users.txt", json_encode($users));
    echo "Registered successfully!";
} else {
    echo "Username already exists.";
}
?>