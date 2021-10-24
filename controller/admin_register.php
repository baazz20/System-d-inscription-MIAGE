<?php
include 'dataconn.php';

if (isset($_POST['nouvelAdmin'])) {

    $imgname = $_FILES['photoAdmin']['name'];

    $extension = pathinfo($imgname, PATHINFO_EXTENSION);

    $randomno = rand(0, 100000);
    $rename = $_POST['uname'] . "_" . date('Ymd') . $randomno;

    $photoAdmin = $rename . '.' . $extension;

    $filename = $_FILES['photoAdmin']['tmp_name'];

    if (move_uploaded_file($filename, '../assets/uploads/photoAdmin/' . $photoAdmin)) {

    } else {
        $errorMsg = "Fichier non telechargé";
    }
    
    $nom = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   


    
        // verifie si le compte existe deja
    $select = mysqli_query($conn, "SELECT * FROM admin WHERE user_name = '$nom' OR email = '$email'");
    if (mysqli_num_rows($select)) {
        $errorMsg = "Ce compte existe dejà !";
    }else{
        // insertion dans la table admin
            $query = "INSERT INTO admin(
                user_name,
                email,
                password,
                photo) VALUES (
                    '$nom',
                    '$email',
                    '$password',
                    '$photoAdmin')";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                header("Location: ../connexion.php");
            } else {
                // header("Location: ../tables.php");
                echo 'requette non executer';

            }
}

    // } else {
    //     // $erreur = "vous n'etre autorisé a ouvrir un compte";
    //     // header("Location: ../tables.php");
    //     echo "vous n'etre autorisé a ouvrir un compte";

    // }

} 
