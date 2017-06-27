<?php
include_once("connection.php");

$errorMsgLogin = '';

function verifyLogin($user, $password, &$result, $con)
{

    $sql = "SELECT id FROM users WHERE username='$user' and password='$password'";
    $result = $con->query($sql);
    $row = $result->fetchAll();

    if (!empty($row[0])) {
        return 1;
    } else {
        return 0;
    }
}

if (!isset($_SESSION['id_user'])) {
    if (isset($_POST["login"])) {
        if (verifyLogin($_POST['user'], $_POST['password'], $result, $con) == 1) {
            $_SESSION['id_user'] = $result->id;
            header("location:index.php");
        } else {
            $errorMsgLogin = 'Su usuario es incorrecto, intente nuevamente.';
        }
        return;
    }
} else {
    echo '<a href="logout.php">Salir</a>';
};


?>