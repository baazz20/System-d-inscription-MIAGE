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


    $matriculeMESRS = $POST['matriculeMESRS'];
    $matriculeMEN = $POST['matriculeMEN'];
    $numeroTableBac = $POST['numeroTableBac'];
    $anneeBac = $POST['anneeBac'];
    $serieBac = $POST['serieBac'];
    $pointBac = $POST['pointBac'];
    $centreBac = $POST['centreBac'];
    $montantPayer = $POST['montantPayer'];
    $nom = $POST['nom'];
    $prenom = $POST['prenom'];
    $datenaiss = $POST['datenaiss'];
    $lieunaiss = $POST['lieunaiss'];
    $genre = $POST['genre'];
    $Nationalite = $POST['Nationalite'];
    $piece = $POST['piece'];
    $numpiece = $POST['numpiece'];
    $email = $POST['email'];
    $tel = $POST['tel'];
    $Commune = $POST['Commune'];
    $Whatsapp = $POST['Whatsapp'];
    $urgentContact = $POST['urgentContact'];
    $urgentTel = $POST['urgentTel'];
    $pere = $POST['pere'];
    $mere = $POST['mere'];
    $pereProfes = $POST['pereProfes'];
    $mereProfes = $POST['mereProfes'];
    $pereTel = $POST['pereTel'];
    $mereTel = $POST['mereTel'];
    $dateInscription = date('Y-m-d H:i:s');
    $numeroIdentification = $anneeBac. rand(1000, 9999).$numeroTableBac.rand(1000, 9999);


        // verifie si le compte existe deja
    $select = mysqli_query($conn, "SELECT * FROM etudiant WHERE numeroIdentification = '" .  $numeroIdentification . "'");
    if (mysqli_num_rows($select)) {
        $errorMsg = "Ce compte existe dejà !";
    }else{
        // insertion dans la table client
            $query = "INSERT INTO etudiant(
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
                numeroIdentification,
                photo) VALUES (
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
                '$numeroIdentification',
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
    var_dump($query_run);

    // } else {
    //     // $erreur = "vous n'etre autorisé a ouvrir un compte";
    //     // header("Location: ../tables.php");
    //     echo "vous n'etre autorisé a ouvrir un compte";

    // }

} 
