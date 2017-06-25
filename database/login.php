<?php
session_start();
include_once("connection.php");

$errorMsgLogin = '';

function verifyLogin($user, $password, &$result, $con)
{

    $sql = "SELECT * FROM users WHERE username='$user' and password='$password'";
    $result = $con->query($sql);
    echo $sql;
    $count = 0;
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        $count++;
        $result = $row;
    }
    if ($count == 1) {
        return 1;
    } else {
        return 0;
    }
}

if (!isset($_SESSION['id_user'])) {
    echo "sin sesion";
    if (isset($_POST["login"])) {
        echo "ejecuto post";

        if (verifyLogin($_POST['user'], $_POST['password'], $result, $con) == 1) {
            echo 'Su usuario ingreso correctamente.';

            $_SESSION['id_user'] = $result->id;
            header("location:/admin/index.php");
        } else {
            $errorMsgLogin = 'Su usuario es incorrecto, intente nuevamente.';
        }
        return;
    } else {
        echo "no ejecuto post";
    }
} else {
    echo 'Su usuario ingreso correctamente.';
    echo '<a href="logout.php">Salir</a>';
};


?>