<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Lab pt.1</title>
</head>

<body>
    <?php
    $_SESSION['views'] = 0;
    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views'] + 1;
    } else {
        $_SESSION['views'] = 1;
    }
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    echo $_SESSION['browser'];
    $_SESSION['role'] = ['admin'];
    var_dump($_SESSION['role']);
    echo $_SESSION['views']
    ?>
    <div>
        <p>
            Welcome to the first part of the sessions lab where I will be creating a session!
        </p>
        <div>
            <a href="read_session.php">Read Session</a>
            <br><br>
            <a href="destroy_session.php">Destroy Session</a>
            <br><br>
            <a href="destroy_all_session.php">Destroy all Session</a>
        </div>
    </div>
</body>

</html>