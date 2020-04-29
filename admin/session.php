<?php
include "../functions/database.php";
session_start();

$user_check = $_SESSION['login_user'];

$admin = $conn->prepare('SELECT * FROM wartawan WHERE email = :email');
$admin->execute(array( ':email' => $user_check ));
$row = $admin->fetch(PDO::FETCH_ASSOC);

$login_session=$row['email'];
$idwartawan = $row['idwartawan'];

if(!isset($login_session)) {
    header("Location: login.php");
}
?>