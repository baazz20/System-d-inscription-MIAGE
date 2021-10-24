<?php
session_start();
include 'dataconn.php';
if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: ../connexion.php?error= Le Nom d'utilisateur est nécessaire");
        exit();
    } else if (empty($pass)) {
        header("Location: ../connexion.php?error= Le Mot de passe est nécessaire");
        exit();
    } else {
        $sql = "SELECT * FROM admin WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['signature'] = $row['signature'];
                $_SESSION['auth'] = true;
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../connexion.php?error=Pseudo ou mot de passe incorrect");
                exit();
            }
        } else {
            header("Location: ../connexion.php?error=Pseudo ou mot de passe incorrect");
            exit();
        }
    }
} else {
    header("Location: ../connexion.php");
    exit();
}