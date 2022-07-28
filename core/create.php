<?php


require_once '../config/connect.php';

$name = $_POST['name'];
$message = $_POST['message'];

mysqli_query($connect,"INSERT INTO `message` (`id`, `name`, `message`) VALUES (NULL, '$name', '$message')");

header('Location: /');