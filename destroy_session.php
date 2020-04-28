<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        unset($_SESSION['views']);
        unset($_SESSION['browser']);
        unset($_SESSION['role']);
        ?>
        <p>
            Welcome to the destroy session portion of the lab.
        </p>
        <div>
            <a href="read_session.php">Read Session</a>
            <br><br>
            <a href="create_session.php">Create Session</a>
            <br><br>
            <a href="destroy_all_session.php">Destroy all Session</a>
        </div>
    </div>
</body>

</html>