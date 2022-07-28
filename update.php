<?php

 
    require_once 'config/connect.php';

    $mes_id = $_GET['id'];

    $mes = mysqli_query($connect, "SELECT * FROM `message` WHERE `id` = '$mes_id'");


    $mes = mysqli_fetch_assoc($mes);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update message</title>
</head>
<body>
    <h3>Update message</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $mes['id'] ?>">
        <p>name</p>
        <input type="text" name="name" value="<?= $mes['name'] ?>">
        <p>Description</p>
        <textarea name="message"><?= $mes['message'] ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>