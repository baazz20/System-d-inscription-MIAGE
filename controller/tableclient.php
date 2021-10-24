<?php
include 'dataconn.php';

if (isset($_POST['enregistreClient'])) {

    $imgname = $_FILES['photo']['name'];
    $signame = $_FILES['signature']['name'];

    $extension = pathinfo($imgname, PATHINFO_EXTENSION);

    $randomno = rand(0, 100000);
    $rename = $_POST['cni'] . "_" . date('Ymd') . $randomno;
    $sigrename = $_POST['cni'] . "_" . date('Ymd') . $randomno;

    $photo = $rename . '.' . $extension;

    $signature = $sigrename . '.' . $extension;

    $filename = $_FILES['photo']['tmp_name'];

    $sigfilename = $_FILES['signature']['tmp_name'];

    if (move_uploaded_file($filename, '../assets/uploads/photoIdentite/' . $photo) and move_uploaded_file($sigfilename, '../assets/uploads/signature/' . $signature)) {

    } else {
        $errorMsg = "Fichier non telechargé";
    }
    
    $cni = $_POST['cni'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateN = $_POST['dateN'];
    $naissL = $_POST['naissL'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    // $photo = $_POST['photo'];
    // $signature = $_POST['signature'];
    $sexe = $_POST['sexe'];

    // if ($_SESSION['role'] === "super_admin" || "admin") {
        // verifie si le compte existe deja
    $select = mysqli_query($conn, "SELECT * FROM client WHERE cni_passport = '" . $_POST['cni'] . "'");
    if (mysqli_num_rows($select)) {
        $errorMsg = "Ce compte existe dejà !";
    }else{
        // insertion dans la table client
            $query = "INSERT INTO client(
                cni_passport,
                nomclient,
                prenomclient,
                datenaiss,
                lieunaiss,
                telephone,
                email,
                profession,
                lienphoto,
                liensignature,
                sexe) VALUES (
                    '$cni',
                    '$nom',
                    '$prenom',
                    '$dateN',
                    '$naissL',
                    '$telephone',
                    '$email',
                    '$profession',
                    '$photo',
                    '$signature',
                    '$sexe')";
            $query_run = mysqli_query($conn, $query);
            // move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$photo");

            if ($query_run) {
                header("Location: ../tables.php");
            } else {
                // header("Location: ../tables.php");
                echo 'requette non executer';

            }
}
    var_dump($query_run);

    // } else {
    //     // $erreur = "vous n'etre autorisé a ouvrir un compte";
    //     // header("Location: ../tables.php");
    //     echo "vous n'etre autorisé a ouvrir un compte";

    // }

} 
