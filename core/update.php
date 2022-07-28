<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$message = $_POST['message'];

mysqli_query($connect, "UPDATE `message` SET `name` = '$name',  `message` = '$message' WHERE `id` = '$id'");


header('Location: /');