<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
 <div>
 <h3>new message</h3>
    <form action="vendor/create.php" method="post">
        <p>name</p>
        <input type="name" name="name">
        <p>message</p>
        <textarea name="message"></textarea>  
        <button type="submit">Add 
    </form>
</div>

    <table>
        <tr> 
            <th>name</th>
            <th>message</th>       
        </tr>

        <?php
 
            $mess = mysqli_query($connect, "SELECT * FROM `message`");
       
            $mess = mysqli_fetch_all($mess);
       
            foreach ($mess as $mes) {
                ?>
                    <tr>
                        <td><?= $mes[1] ?></td>
                        <td><?= $mes[2] ?></td>
                        <td><a href="update.php?id=<?= $mes[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $mes[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <html>


</body>
</html>
