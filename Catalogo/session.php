<?php
session_start();
echo json_encode(['user' => $_SESSION['user'] ?? null]);
?>