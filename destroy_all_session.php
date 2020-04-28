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
        session_destroy();
        ?>
        <p>
            Welcome to the destroy all sessions portion of the lab.
        </p>
        <div>
            <a href="read_session.php">Read Session</a>
            <br><br>
            <a href="destroy_session.php">Destroy Session</a>
            <br><br>
            <a href="create_session.php">Create all Session</a>
        </div>
    </div>
</body>

</html>