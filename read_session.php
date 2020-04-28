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
    <?php
    $space = "<br>";
    var_dump($_SESSION['role']);
    echo $space;
    echo $_SESSION['browser'];
    echo $space;
    echo $_SESSION['views'];
    ?>
    <div>
        <p>Welcome to the Read portion of the Session Lab.</p>
        <div>
            <a href="create_session.php">Create Session</a>
            <br><br>
            <a href="destroy_session.php">Destroy Session</a>
            <br><br>
            <a href="destroy_all_session.php">Destroy all Session</a>
        </div>
    </div>
</body>

</html>