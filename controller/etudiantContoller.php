<?php
include 'dataconn.php';

if (isset($_POST['valider'])) {

    $imgname = $_FILES['photoEtudiant']['name'];
    $extension = pathinfo($imgname, PATHINFO_EXTENSION);
    $randomno = rand(0, 100000);
    $rename = $_POST['tel'] . "_" . date('Ymd') . $randomno;
    $photo = $rename . '.' . $extension;
    $filename = $_FILES['photoEtudiant']['tmp_name'];

    if (move_uploaded_file($filename, '../assets/uploads/pictures/' . $photo)) {
    } else {
        $errorMsg = "Fichier non telechargé";
    }

    $numeroIdentification = $_POST['anneeBac'] . rand(1000, 9999) . $_POST['numeroTableBac'] . rand(1000, 9999);
    $matriculeMESRS = $_POST['matriculeMESRS'];
    $matriculeMEN = $_POST['matriculeMEN'];
    $numeroTableBac = $_POST['numeroTableBac'];
    $anneeBac = $_POST['anneeBac'];
    $serieBac = $_POST['serieBac'];
    $pointBac = $_POST['pointBac'];
    $centreBac = $_POST['centreBac'];
    $montantPayer = $_POST['montantPayer'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $datenaiss = $_POST['datenaiss'];
    $lieunaiss = $_POST['lieunaiss'];
    $genre = $_POST['genre'];
    $Nationalite = $_POST['Nationalite'];
    $piece = $_POST['piece'];
    $numpiece = $_POST['numpiece'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $Commune = $_POST['Commune'];
    $Whatsapp = $_POST['Whatsapp'];
    $urgentContact = $_POST['urgentContact'];
    $urgentTel = $_POST['urgentTel'];
    $pere = $_POST['pere'];
    $mere = $_POST['mere'];
    $pereProfes = $_POST['pereProfes'];
    $mereProfes = $_POST['mereProfes'];
    $pereTel = $_POST['pereTel'];
    $mereTel = $_POST['mereTel'];
    $dateInscription = date('Y-m-d H:i:s');


    // verifie si le compte existe deja
    $select = mysqli_query($conn, "SELECT * FROM etudiant WHERE numeroIdentification = '" .  $numeroIdentification . "'");
    if (mysqli_num_rows($select)) {
        $errorMsg = "Ce compte existe dejà !";
    } else {
        // insertion dans la table client
        $query = "INSERT INTO etudiant(
                numeroIdentification,
                matriculeMESRS,
                matriculeMEN,
                numeroTableBac,
                anneeBac,
                serieBac,
                pointBac,
                centreBac,
                montantPayer,
                nom,
                prenom,
                datenaiss,
                lieunaiss,
                genre,
                Nationalite,
                piece,
                numpiece,
                email,
                tel,
                Commune,
                Whatsapp,
                urgentContact,
                urgentTel,
                pere,
                mere,
                pereProfes,
                mereProfes,
                pereTel,
                mereTel,
                dateInscription,
                photo) VALUES (
                '$numeroIdentification',
                '$matriculeMESRS',
                '$matriculeMEN',
                '$numeroTableBac',
                '$anneeBac',
                '$serieBac',
                '$pointBac',
                '$centreBac',
                '$montantPayer',
                '$nom',
                '$prenom',
                '$datenaiss',
                '$lieunaiss',
                '$genre',
                '$Nationalite',
                '$piece',
                '$numpiece',
                '$email',
                '$tel',
                '$Commune',
                '$Whatsapp',
                '$urgentContact',
                '$urgentTel',
                '$pere',
                '$mere',
                '$pereProfes',
                '$mereProfes',
                '$pereTel',
                '$mereTel',
                '$dateInscription',
                '$photo')";
        $query_run = mysqli_query($conn, $query);
        // move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$photo");

        if ($query_run) {
            header("Location: ../tables.php");
        } else {
            // header("Location: ../tables.php");
            echo 'requette non executer';
        }
    }
    var_dump($conn);

    // } else {
    //     // $erreur = "vous n'etre autorisé a ouvrir un compte";
    //     // header("Location: ../tables.php");
    //     echo "vous n'etre autorisé a ouvrir un compte";

    // }

}
